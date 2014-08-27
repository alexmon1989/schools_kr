<?php

/**
 * Модель для управления объектом "Учреждение"
 */

class Model_Institution extends Model_MyModel
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
                    'model_to' => 'Model_Municipality',
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

        /**
         * Метод для валидации данных при поступлении в БД
         */
	public static function validate($factory)
	{
            $val = Validation::forge($factory);
            $val->add_callable('MyRules');
            
            $val->add_field('municipality_id', 'Муниципальное образование', 'required|valid_string[numeric]');
            $val->add_field('institution_kind_id', 'Вид учреждения', 'required|valid_string[numeric]');
            $val->add_field('institution_type_id', 'Тип учреждения', 'required|valid_string[numeric]');
            $val->add_field('full_title', 'Полное название', 'required|max_length[255]');
            $val->add_field('short_title', 'Короткое название', 'required|max_length[100]');
            $val->add_field('address', 'Адрес', 'max_length[255]');
            $val->add_field('telephone', 'Телефон', 'max_length[45]');
            $val->add_field('site', 'Сайт', 'max_length[45]');
            $val->add_field('ogrn_inn', 'ОГРН/ИНН', 'max_length[45]');
            $val->add_field('latitude', 'Широта', 'required|is_float');
            $val->add_field('longtitude', 'Долгота', 'required|is_float');

            return $val;
	}

}
