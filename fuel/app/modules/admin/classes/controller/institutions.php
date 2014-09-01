<?php

/**
 * Контроллер для управления учреждениями
 */

namespace Admin;

class Controller_Institutions extends Controller_Admin
{
    public function before() {
        parent::before();
        
        \View::set_global('title', 'Образовательные учреждения');
    }
    
    /**
     * Действие для отображения списка учреждений
     */
    public function action_index()
    {        
        $this->template->content = \View::forge('institutions/index');
    }

    /**
     * Действие для создания учреждения
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Institution::validate('create');

            if ($val->run())
            {
                $institution = \Model_Institution::forge(array(
                    'municipality_id' => \Input::post('municipality_id'),
                    'institution_kind_id' => \Input::post('institution_kind_id'),
                    'institution_type_id' => \Input::post('institution_type_id'),
                    'full_title' => \Input::post('full_title'),
                    'short_title' => \Input::post('short_title'),
                    'address' => \Input::post('address'),
                    'telephone' => \Input::post('telephone'),
                    'site' => \Input::post('site'),
                    'ogrn_inn' => \Input::post('ogrn_inn'),
                    'latitude' => \Input::post('latitude'),
                    'longtitude' => \Input::post('longtitude'),
                ));

                if ($institution and $institution->save())
                {
                    \Session::set_flash('success', e('Добавлено образовательное учреждение с идентификатором #'.$institution->id.'.'));
                    \Response::redirect_back('admin/institutions');
                }
                else
                {
                    \Session::set_flash('error', e('Невозможно сохранить.'));
                }
            }
            else
            {
                \Session::set_flash('error', $val->error());
            }
        }

        // Выборка из БД для select'ов 
        \View::set_global('kinds', \Model_Institution_Kind::get_list_for_select());
        \View::set_global('types', \Model_Institution_Type::get_list_for_select());
        \View::set_global('municipalities', \Model_Municipality::get_list_for_select('title'));
        
        // Подгружаем скрипты карты
        $this->template->js = array('//api-maps.yandex.ru/2.1/?lang=ru_RU', 'admin/createMap.js');
        
        $this->template->content = \View::forge('institutions/create');
    }

    /**
     * Действие для редактирования данных
     * 
     * @param int $id
     */
    public function action_edit($id = null)
    {
        is_null($id) and \Response::redirect_back('admin\institutions');
        
        if (! $institution = \Model_Institution::find($id))
        {
            \Session::set_flash('error', 'Учебное учреждение c идентификатором #'.$id.' не найдено.');
            \Response::redirect_back('admin\institutions');
        }
        
        $val = \Model_Institution::validate('edit');

        if ($val->run())
        {
            $institution->municipality_id = \Input::post('municipality_id');
            $institution->institution_kind_id = \Input::post('institution_kind_id');
            $institution->institution_type_id = \Input::post('institution_type_id');
            $institution->full_title = \Input::post('full_title');
            $institution->short_title = \Input::post('short_title');
            $institution->address = \Input::post('address');
            $institution->telephone = \Input::post('telephone');
            $institution->site = \Input::post('site');
            $institution->ogrn_inn = \Input::post('ogrn_inn');
            $institution->latitude = \Input::post('latitude');
            $institution->longtitude = \Input::post('longtitude');

            if ($institution->save())
            {
                \Session::set_flash('success', e('Обновлены данные учебного учреждения с идентификатором #' . $id));
                \Response::redirect('admin/institutions/edit/'.$id);
            }

            else
            {
                \Session::set_flash('error', e('Не удалось обновить данные учебного учреждения с идентификатором #' . $id));
            }
        }
        else        
        {
            if (\Input::method() == 'POST')
            {
                $institution->municipality_id = $val->validated('municipality_id');
                $institution->institution_kind_id = $val->validated('institution_kind_id');
                $institution->institution_type_id = $val->validated('institution_type_id');
                $institution->full_title = $val->validated('full_title');
                $institution->short_title = $val->validated('short_title');
                $institution->address = $val->validated('address');
                $institution->telephone = $val->validated('telephone');
                $institution->site = $val->validated('site');
                $institution->ogrn_inn = $val->validated('ogrn_inn');
                $institution->latitude = $val->validated('latitude');
                $institution->longtitude = $val->validated('longtitude');

                \Session::set_flash('error', $val->error());
            }
            // Выборка из БД для select'ов 
            \View::set_global('kinds', \Model_Institution_Kind::get_list_for_select());
            \View::set_global('types', \Model_Institution_Type::get_list_for_select());
            \View::set_global('municipalities', \Model_Municipality::get_list_for_select('title'));
            
            $institution->data_json = json_decode($institution->data_json);
            $this->template->set_global('institution', $institution, false);
        }
        
        // Подгружаем скрипты карты
        $this->template->js = array('admin/jquery.jeditable.mini.js', 
            '//api-maps.yandex.ru/2.1/?lang=ru_RU', 
            'admin/createMap.js');
        $this->template->content = \View::forge('institutions/edit');
    }
    
    /**
     * Дейсвтие для обработки АЯКС-запроса на изменение доп. данных муниципалитета
     */
    public function action_edit_data_json($id = null)
    {
        if (\Input::method() == 'POST')
        {
            if (!is_null($id) and $institution = \Model_Institution::find($id))
            {
                $arr = array();
                if (!is_null($institution->data_json))
                {
                    $arr = json_decode($institution->data_json, TRUE);
                }
                $arr[\Input::post('id')] = \Input::post('value');
                $institution->data_json = json_encode($arr);
                $institution->save();
                
                return \View::forge('institutions/edit_data_json', array('value' => \Input::post('value')));
            }
        }
    }

    /**
     * Удаление записи
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {
        if ($institution = \Model_Institution::find($id))
        {
            $institution->delete();

            \Session::set_flash('success', e('Удалено учебное учреждение с идентификатором #'.$id));
        }

        else
        {
            \Session::set_flash('error', e('невозможно удалить учебное учреждение с идентификатором #'.$id));
        }

        \Response::redirect('admin/institutions');
    }
}
