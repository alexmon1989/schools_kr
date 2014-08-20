<?php

/**
 * Контроллер для управления списком видов учреждений
 */

namespace Admin;

class Controller_Lists_Kinds extends Controller_Admin
{
    public function before() {
        parent::before();
        
        \View::set_global('title', 'Списки');
    }

    /**
     * Действие для отображения страницы со списком видов учреждений
     */
    public function action_index()
    {
        $data['list'] = \Model_Institution_Kind::find('all');
        $this->template->content = \View::forge('lists/kinds/index', $data);
    }
   
    /**
     * Действие для создания нового вида учреждения
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Institution_Kind::validate('create');

            if ($val->run())
            {
                $kind = \Model_Institution_Kind::forge(array(
                    'value' => \Input::post('value'),
                ));

                if ($kind and $kind->save())
                {
                    \Session::set_flash('success', 'Вид учреждения добавлен c идентификатором #'.$kind->id.'.');

                    \Response::redirect('admin/lists/kinds');
                }

                else
                {
                    \Session::set_flash('error', 'Ошибка при создании вида учреждения.');
                }
            }
            else
            {
               \Session::set_flash('error', $val->error());
            }
        }

        $this->template->content = \View::forge('lists/kinds/create');

    }

    /**
     * Действие для редактирования вида учреждения
     * 
     * @param int $id
     */
    public function action_edit($id = null)
    {
        is_null($id) and \Response::redirect('admin/lists/kinds');

        if ( ! $kind = \Model_Institution_Kind::find($id))
        {
            \Session::set_flash('error', 'Невозможно найти вид учреждения с идентификатором #'.$id);
            \Response::redirect_back('admin/lists/kinds');
        }

        $val = \Model_Institution_Kind::validate('edit');

        if ($val->run())
        {
            $kind->value = \Input::post('value');

            if ($kind->save())
            {
                \Session::set_flash('success', 'Обновлен вид учреждения с идентификатором #' . $id);
                \Response::redirect_back('admin/lists/kinds');
            }

            else
            {
                \Session::set_flash('error', 'Невозможно обновить вид учреждения с идентификатором #' . $id);
            }
        }
        else
        {
            if (\Input::method() == 'POST')
            {
                $kind->value = $val->validated('value');

                \Session::set_flash('error', $val->error());
            }

            $this->template->set_global('kind', $kind, FALSE);
        }
        
        $this->template->content = \View::forge('lists/kinds/edit');
    }

    /**
     * Действие для удаления вида учреждения
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {        
        is_null($id) and \Response::redirect('admin/lists/kinds');

        if ($kind = \Model_Institution_Kind::find($id))
        {
            $kind->delete();
            \Session::set_flash('success', 'Успешно удалён вид учреждения с идентификатором #'.$id);
            \Response::redirect_back('admin/lists/kinds');
        }

        else
        {            
            \Session::set_flash('error', 'Невозможно найти вид учреждения с идентификатором #'.$id);
        }

        \Response::redirect('admin/lists/kinds');

    }

}
