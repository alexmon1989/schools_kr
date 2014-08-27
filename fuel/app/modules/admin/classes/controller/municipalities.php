<?php

/**
 * Контроллер для управления муниципальными образованиями
 */

namespace Admin;

class Controller_Municipalities extends Controller_Admin
{
    public function before() {
        parent::before();
        
        \View::set_global('title', 'Муниципальные образования');
    }

    /**
     * Действие для отображения страницы со списком муниципальных образований
     */
    public function action_index()
    {
        $data['municipalities'] = \Model_Municipality::find('all');
        $this->template->content = \View::forge('municipalities/index', $data);
    }
   
    /**
     * Действие для создания нового муниц. обр-ия
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Municipality::validate('create');

            if ($val->run())
            {
                $municipality = \Model_Municipality::forge(array(
                        'title' => \Input::post('title'),
                        'latitude' => \Input::post('latitude'),
                        'longtitude' => \Input::post('longtitude'),
                        'data_json' => NULL,
                ));

                if ($municipality and $municipality->save())
                {
                    \Session::set_flash('success', 'Муниципалитетное образование добавлено c идентификатором #'.$municipality->id.'.');

                    \Response::redirect('admin/municipalities');
                }

                else
                {
                    \Session::set_flash('error', 'Could not save municipality.');
                }
            }
            else
            {
                \Session::set_flash('error', $val->error());
            }
        }

        // Подгружаем скрипты карты
        $this->template->js = array('//api-maps.yandex.ru/2.1/?lang=ru_RU', 'admin/createMap.js');
        $this->template->content = \View::forge('municipalities/create');

    }

    /**
     * Действие для редактирования муниципалитета
     * 
     * @param int $id
     */
    public function action_edit($id = null)
    {
        is_null($id) and \Response::redirect_back('admin\municipalities');

        if ( ! $municipality = \Model_Municipality::find($id))
        {
            \Session::set_flash('error', 'Муниципалитетное образование c идентификатором #'.$id.' не найдено.');
            \Response::redirect_back('admin\municipalities');
        }

        $val = \Model_Municipality::validate('edit');

        if ($val->run())
        {
            $municipality->title = \Input::post('title');
            $municipality->latitude = \Input::post('latitude');
            $municipality->longtitude = \Input::post('longtitude');

            if ($municipality->save())
            {
                \Session::set_flash('success', 'Обновлено муниципалитетное образование c идентификатором #' . $id);
                \Response::redirect_back('admin/municipalities');
            }
            else
            {
                \Session::set_flash('error', 'Невозможно обновить муниципалитетное образование c идентификатором #' . $id);
            }
        }
        else
        {
            if (\Input::method() == 'POST')
            {
                $municipality->title = $val->validated('title');
                $municipality->latitude = $val->validated('latitude');
                $municipality->longtitude = $val->validated('longtitude');

                \Session::set_flash('error', $val->error());
            }

            $municipality->data_json = json_decode($municipality->data_json);
            $this->template->set_global('municipality', $municipality, false);
        }
        
        $this->template->js = array('admin/jquery.jeditable.mini.js', 
            '//api-maps.yandex.ru/2.1/?lang=ru_RU', 
            'admin/createMap.js'
        );
        $this->template->content = \View::forge('municipalities/edit');
    }
    
    /**
     * Дейсвтие для обработки АЯКС-запроса на изменение доп. данных муниципалитета
     */
    public function action_edit_data_json($id = null)
    {
        if (\Input::method() == 'POST')
        {
            if (!is_null($id) and $municipality = \Model_Municipality::find($id))
            {
                $arr = array();
                if (!is_null($municipality->data_json))
                {
                    $arr = json_decode($municipality->data_json, TRUE);
                }
                $arr[\Input::post('id')] = \Input::post('value');
                $municipality->data_json = json_encode($arr);
                $municipality->save();
                
                return \View::forge('municipalities/edit_data_json', array('value' => \Input::post('value')));
            }
        }
    }

    /**
     * Действие для удаления муниципального обр-ия
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {
        is_null($id) and \Response::redirect_back('admin\municipalities');

        if ($municipality = \Model_Municipality::find($id))
        {
            $municipality->delete();
            \Session::set_flash('success', 'Удалено муниципальное образование с идентификатором #'.$id);
        }
        else
        {
            \Session::set_flash('error', 'Невозможно удалить муниципальное образование с идентификатором #'.$id);
        }

        \Response::redirect_back('admin\municipalities');
    }

}
