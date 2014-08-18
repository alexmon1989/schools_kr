<?php

namespace Fuel\Migrations;

class Create_municipalities
{
	public function up()
	{
		\DBUtil::create_table('municipalities', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'latitude' => array('type' => 'float'),
			'longtitude' => array('type' => 'float'),
			'data_json' => array('type' => 'text', 'null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('municipalities');
	}
}