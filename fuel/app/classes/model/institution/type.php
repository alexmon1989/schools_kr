<?php

/**
 * Модель для управления объектом "Тип учреждения"
 */

class Model_Institution_Type extends Model_MyModel
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

    protected static $_table_name = 'institution_types';

    // Связь с таблицей `institutions`
    protected static $_has_many = array(
        'institutions' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Institution',
            'key_to' => 'institution_type_id',
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
}
