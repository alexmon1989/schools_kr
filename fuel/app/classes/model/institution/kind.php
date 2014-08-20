<?php

/**
 * Модель для управления объектом "Вид учреждения"
 */

class Model_Institution_Kind extends \Orm\Model
{
    protected static $_properties = array(
        'id',
        'value',
        'created_at',
        'updated_at',
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_update'),
            'mysql_timestamp' => false,
        ),
    );

    protected static $_table_name = 'institution_kinds';

    // Связь с таблицей `institutions`
    protected static $_has_many = array(
        'institutions' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Institution',
            'key_to' => 'institution_kind_id',
            'cascade_save' => true,
            'cascade_delete' => true,
        )
    );

    /**
     * Метод для валидации данных
     */
    public static function validate($factory)
    {
        $val = Validation::forge($factory);
        $val->add_field('value', 'Название', 'required|max_length[255]');

        return $val;
    }
    
    public static function get_list_for_select()
    {
        $res = array('' => '');
        
        $list = self::find('all', array('order_by' => array('value' => 'desc')));
        foreach ($list as $item)
        {
            $res[$item->id] = $item->value;
        }
        
        return $res;
    }
}
