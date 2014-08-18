<?php

namespace Fuel\Migrations;

class Create_institutions
{
	public function up()
	{
		\DBUtil::create_table('institutions', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'municipality_id' => array('constraint' => 11, 'type' => 'int'),
			'institution_kind_id' => array('constraint' => 11, 'type' => 'int'),
			'institiution_type_id' => array('constraint' => 11, 'type' => 'int'),
			'full_title' => array('constraint' => 255, 'type' => 'varchar'),
			'short_title' => array('constraint' => 100, 'type' => 'varchar', 'null' => true),
			'address' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'telephone' => array('constraint' => 45, 'type' => 'varchar', 'null' => true),
			'site' => array('constraint' => 45, 'type' => 'varchar', 'null' => true),
			'ogrn_inn' => array('constraint' => 45, 'type' => 'varchar', 'null' => true),
			'data_json' => array('type' => 'text', 'null' => true),
			'latitude' => array('type' => 'float', 'null' => true),
			'longtitude' => array('type' => 'float', 'null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('institutions');
	}
}