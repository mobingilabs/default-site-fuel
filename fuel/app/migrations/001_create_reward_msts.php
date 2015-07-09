<?php

namespace Fuel\Migrations;

class Create_reward_msts
{
	public function up()
	{
		\DBUtil::create_table('reward_msts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'reward_id' => array('constraint' => 11, 'type' => 'int'),
			'reward_name' => array('constraint' => 100, 'type' => 'varchar'),
			'reward_info' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reward_msts');
	}
}
