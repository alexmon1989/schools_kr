<?php

namespace Fuel\Migrations;

class Rename_field_institiution_type_id_to_institution_type_id_in_institutions
{
	public function up()
	{
		\DBUtil::modify_fields('institutions', array(
			'institiution_type_id' => array('name' => 'institution_type_id', 'type' => 'int', 'constraint' => 11)
		));
	}

	public function down()
	{
	\DBUtil::modify_fields('institutions', array(
			'institution_type_id' => array('name' => 'institiution_type_id', 'type' => 'int', 'constraint' => 11)
		));
	}
}