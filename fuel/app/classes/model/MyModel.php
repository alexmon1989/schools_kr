<?php

/**
 * Модель, расширяющая базовый класс
 */

class Model_MyModel extends \Orm\Model
{
    /**
     * Получить список элементов для html-поля select
     * 
     * @return array
     */
    public static function get_list_for_select($value_field_name = 'value')
    {
        $res = array('' => '');
        
        $list = self::find('all', array('order_by' => array($value_field_name => 'ASC')));
        foreach ($list as $item)
        {
            $res[$item->id] = $item->$value_field_name;
        }
        
        return $res;
    }

}
