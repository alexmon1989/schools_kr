<?php

/**
 * Контроллер для управления списком типов учреждений
 */

namespace Admin;

class Controller_Lists_Types extends Controller_Admin
{
    public function before() {
        parent::before();
        
        \View::set_global('title', 'Списки');
    }

    /**
     * Действие для отображения страницы со списком типов учреждений
     */
    public function action_index()
    {
        $data['list'] = \Model_Institution_Type::find('all');
        $this->template->content = \View::forge('lists/types/index', $data);
    }
   
    /**
     * Действие для создания нового типа учреждения
     */
    public function action_create()
    {
        if (\Input::method() == 'POST')
        {
            $val = \Model_Institution_Type::validate('create');

            if ($val->run())
            {
                $type = \Model_Institution_Type::forge(array(
                    'value' => \Input::post('value'),
                ));

                if ($type and $type->save())
                {
                    \Session::set_flash('success', 'Тип учреждения добавлен c идентификатором #'.$type->id.'.');

                    \Response::redirect('admin/lists/types');
                }

                else
                {
                    \Session::set_flash('error', 'Ошибка при создании типа учреждения.');
                }
            }
            else
            {
                \Session::set_flash('error', $val->error());
            }
        }

        $this->template->content = \View::forge('lists/types/create');

    }

    /**
     * Действие для редактирования типа учреждения
     * 
     * @param int $id
     */
    public function action_edit($id = null)
    {
        is_null($id) and \Response::redirect('admin/lists/types');

        if ( ! $type = \Model_Institution_Type::find($id))
        {
            \Session::set_flash('error', 'Невозможно найти тип учреждения с идентификатором #'.$id);
            \Response::redirect_back('admin/lists/types');
        }

        $val = \Model_Institution_Type::validate('edit');

        if ($val->run())
        {
            $type->value = \Input::post('value');

            if ($type->save())
            {
                \Session::set_flash('success', 'Обновлен тип учреждения с идентификатором #' . $id);
                \Response::redirect_back('admin/lists/types');
            }

            else
            {
                \Session::set_flash('error', 'Невозможно обновить тип учреждения с идентификатором #' . $id);
            }
        }
        else
        {
            if (\Input::method() == 'POST')
            {
                $type->value = $val->validated('value');

                \Session::set_flash('error', $val->error());
            }

            $this->template->set_global('type', $type, FALSE);
        }
        
        $this->template->content = \View::forge('lists/types/edit');
    }

    /**
     * Действие для удаления типа учреждения
     * 
     * @param int $id
     */
    public function action_delete($id = null)
    {        
        is_null($id) and \Response::redirect('admin/lists/types');

        if ($type = \Model_Institution_Type::find($id))
        {
            $type->delete();
            \Session::set_flash('success', 'Успешно удалён тип учреждения с идентификатором #'.$id);
            \Response::redirect_back('admin/lists/kinds');
        }

        else
        {            
            \Session::set_flash('error', 'Невозможно найти тип учреждения с идентификатором #'.$id);
        }

        \Response::redirect('admin/lists/types');
    }

}
