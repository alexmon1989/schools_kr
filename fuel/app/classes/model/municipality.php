<?php

/**
 * Модель для управления объектом "Муниципалитет"
 */

use Orm\Model;

class Model_Municipality extends Model
{
	protected static $_properties = array(
		'id',
		'title',
		'latitude',
		'longtitude',
		'data_json',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
        
        // Связь с таблицей `institutions`
        protected static $_has_many = array(
            'institutions' => array(
                'key_from' => 'id',
                'model_to' => 'Model_Institution',
                'key_to' => 'municipality_id',
                'cascade_save' => true,
                'cascade_delete' => true,
            )
        );

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('latitude', 'Latitude', 'required');
		$val->add_field('longtitude', 'Longtitude', 'required');
		$val->add_field('data_json', 'Data Json', 'required');

		return $val;
	}

}
