<?php

/**
 * Модель для управления объектом "Учреждение"
 */

class Model_Institution extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'municipality_id',
		'institution_kind_id',
		'institution_type_id',
		'full_title',
		'short_title',
		'address',
		'telephone',
		'site',
		'ogrn_inn',
		'data_json',
		'latitude',
		'longtitude',
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
        
        // Связи с таблицами `municipalities`, `institution_kinds`, `institution_types`
        protected static $_belongs_to = array(
                'municipality' => array(
                    'key_from' => 'municipality_id',
                    'model_to' => 'Model_Municipalities',
                    'key_to' => 'id',
                    'cascade_save' => true,
                    'cascade_delete' => false,
                ),
                'institution_kind' => array(
                    'key_from' => 'institution_kind_id',
                    'model_to' => 'Model_Institution_Kind',
                    'key_to' => 'id',
                    'cascade_save' => true,
                    'cascade_delete' => false,
                ),
                'institution_type' => array(
                    'key_from' => 'institution_type_id',
                    'model_to' => 'Model_Institution_Type',
                    'key_to' => 'id',
                    'cascade_save' => true,
                    'cascade_delete' => false,
                )
        );

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('municipality_id', 'Муниципальное образование', 'required|valid_string[numeric]');
		$val->add_field('institution_kind_id', 'Вид учреждения', 'required|valid_string[numeric]');
		$val->add_field('institiution_type_id', 'Тип учреждения', 'required|valid_string[numeric]');
		$val->add_field('full_title', 'Полное название', 'required|max_length[255]');
		$val->add_field('short_title', 'Короткое название', 'required|max_length[100]');
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('telephone', 'Telephone', 'required|max_length[45]');
		$val->add_field('site', 'Site', 'required|max_length[45]');
		$val->add_field('ogrn_inn', 'Ogrn Inn', 'required|max_length[45]');
		$val->add_field('data_json', 'Data Json', 'required');
		$val->add_field('latitude', 'Latitude', 'required');
		$val->add_field('longtitude', 'Longtitude', 'required');

		return $val;
	}

}
