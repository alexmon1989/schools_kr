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
        $this->template->js = array('//api-maps.yandex.ru/2.1/?lang=ru_RU', 'admin/createMunicipalityMap.js');
        $this->template->content = \View::forge('municipalities/create');

    }

    public function action_edit($id = null)
    {
            is_null($id) and Response::redirect('municipalities');

            if ( ! $municipality = Model_Municipality::find($id))
            {
                    Session::set_flash('error', 'Could not find municipality #'.$id);
                    Response::redirect('municipalities');
            }

            $val = Model_Municipality::validate('edit');

            if ($val->run())
            {
                    $municipality->title = Input::post('title');
                    $municipality->latitude = Input::post('latitude');
                    $municipality->longtitude = Input::post('longtitude');
                    $municipality->data_json = Input::post('data_json');

                    if ($municipality->save())
                    {
                            Session::set_flash('success', 'Updated municipality #' . $id);

                            Response::redirect('municipalities');
                    }

                    else
                    {
                            Session::set_flash('error', 'Could not update municipality #' . $id);
                    }
            }

            else
            {
                    if (Input::method() == 'POST')
                    {
                            $municipality->title = $val->validated('title');
                            $municipality->latitude = $val->validated('latitude');
                            $municipality->longtitude = $val->validated('longtitude');
                            $municipality->data_json = $val->validated('data_json');

                            Session::set_flash('error', $val->error());
                    }

                    $this->template->set_global('municipality', $municipality, false);
            }

            $this->template->title = "Municipalities";
            $this->template->content = View::forge('municipalities/edit');

    }

    public function action_delete($id = null)
    {
            is_null($id) and Response::redirect('municipalities');

            if ($municipality = Model_Municipality::find($id))
            {
                    $municipality->delete();

                    Session::set_flash('success', 'Deleted municipality #'.$id);
            }

            else
            {
                    Session::set_flash('error', 'Could not delete municipality #'.$id);
            }

            Response::redirect('municipalities');

    }

}
