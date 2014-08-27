<?php

/**
 * Контроллер для обработки Ajax-запросов
 */

namespace Admin;

class Controller_Ajax extends \Controller_Rest
{
    protected $auth = 'check_auth';
    
    // Метод для проверки авторизации
    protected function check_auth()
    {
        if (\Auth::check() and (\Auth::member(100)))
        {
            return TRUE;
        }
        else
        {
            return FALSE;            
        }
    }
    
    public function get_list()
    {        
        //var_dump(\Input::get());
        
        // Столбцы таблицы (а именно их соотв. названия в БД)
        $aColumns = array( 
            'id',
            'short_title', 
            'institution_kind.value', 
            'institution_type.value', 
            'municipality.title', 
            'updated_at', 
            'created_at', 
        );
        
        // Начинаем создавать запрос
        $res = \Model_Institution::query()
                ->related(array('institution_kind', 
                              'institution_type', 
                              'municipality',
                        )
        );
        
        
        // Сортировка
        if (!is_null(\Input::get('order')[0]['column']))
        {            
            $sort_num = \Input::get('order')[0]['column'];
            
            if (\Input::get('columns')[$sort_num]['orderable'] == "true" )
            {
                $res->order_by($aColumns[$sort_num], \Input::get('order')[0]['dir']);  
            }
        }
        
        
        // Фильтрация
        if (!is_null(\Input::get('search')) and \Input::get('search', "")['value'] != "" )
        {
            $res->where_open();
            
            for ( $i=0 ; $i<count($aColumns) ; $i++ )
            {
                if ($i == 0)
                {
                    $res->where($aColumns[$i], 'LIKE', '%'. \Input::get('search', "")['value'] . '%');
                }
                else
                {
                    $res->or_where($aColumns[$i], 'LIKE', '%'. \Input::get('search', "")['value'] . '%');
                }
            }
            
            $res->where_close();
        }
        
        /* 
        // Одтдельная фильтрация для каждого столбца
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
            if ( !is_null(\Input::get('bSearchable_'.$i)) and \Input::get('bSearchable_'.$i) == "true" && \Input::get('sSearch_'.$i, '') != '' )
            {
                if ($i == 10) // Если фильтр по дате
                {
                    $range = explode(' ', \Input::get('sSearch_'.$i));
                    $range[0] = strtotime($range[0]);
                    $range[1] = strtotime($range[1]. ' 23:59:59');
                    $res->where_open();
                    $res->where('created_at', '>=', $range[0]);
                    $res->where('created_at', '<=', $range[1]);
                    $res->where_close();
                }
                else
                {
                    $res->where($aColumns[$i], 'LIKE', '%'. \Input::get('sSearch_'.$i) . '%');                                        
                }
            }
        }    
         */
        
        // Массив для вывода
        $output = array(
            "draw" => intval(\Input::get('draw')),
            "recordsTotal" => \Model_Institution::count(),
            "recordsFiltered" =>  $res->count(),
            "data" => array()
        );
        
        // Пагинация 
        // (раньше ставить этот кусок кода нельзя, т.к. LIMIT не позволяет корректно вернуть кол-во записей)
        if (!is_null(\Input::get('start')) and \Input::get('length') != '-1')
        {
            $res->offset(\Input::get('start'))
                ->limit(\Input::get('length'));
        }
        
        foreach ($res->get() as $value)
        {
            
            $link = '<div class="btn-toolbar">
                        <div class="btn-group">' .
                            \Html::anchor('admin/institutions/edit/'.$value->id, '<i class="glyphicon glyphicon-edit"></i> Редактировать', array('class' => 'btn btn-sm btn-primary', 'title' => 'Редактировать')) .
                            \Html::anchor('admin/institutions/delete/'.$value->id, '<i class="glyphicon glyphicon-trash"></i> Удалить', array('class' => 'btn btn-sm btn-danger', 'title' => 'Удалить', 'onclick' => "return confirm('Вы уверены?');")) .
                        '</div>
                    </div>';
            
            $output["data"][] = array(
                $value->id,
                $value->short_title,
                $value->institution_kind->value,
                $value->institution_type->value,
                $value->municipality->title,
                \Date::forge($value->updated_at)->format("%d.%m.%Y %H:%M"),
                \Date::forge($value->created_at)->format("%d.%m.%Y %H:%M"),
                $link
            );
        }        
        
        //echo(\DB::last_query()); die();
        
        return $this->response($output);
    }
}