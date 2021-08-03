<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mapel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'   => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'kodemapel'  => [
					'type'       => 'VARCHAR',
					'constraint' => '50',
					'null' 		=>True,
			],
			'mapel'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'gurumapel'  => [
					'type'       => 'INT',
					'constraint' => 5,
			],
			'tgluploadmapel' => [
					'type' => 'DATE',
			],
			'tglubahmapel' => [
					'type' => 'DATE',
			],

			
			
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('mapel');
	}

	public function down()
	{
		$this->forge->dropTable('mapel');
	}
}
