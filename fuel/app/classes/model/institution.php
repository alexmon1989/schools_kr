<?php
class Model_Institution extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'municipality_id',
		'institution_kind_id',
		'institiution_type_id',
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

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('municipality_id', 'Municipality Id', 'required|valid_string[numeric]');
		$val->add_field('institution_kind_id', 'Institution Kind Id', 'required|valid_string[numeric]');
		$val->add_field('institiution_type_id', 'Institiution Type Id', 'required|valid_string[numeric]');
		$val->add_field('full_title', 'Full Title', 'required|max_length[255]');
		$val->add_field('short_title', 'Short Title', 'required|max_length[100]');
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
