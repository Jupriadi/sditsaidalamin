<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Slide extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idSlide'   => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'deskripsi'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'subdeskripsi'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'file'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
					'default'   =>'guru.png',
			],
			'tglupload' => [
					'type' => 'DATE',
			],
			'tglubah' => [
					'type' => 'DATE',
			],

			
			
		]);

		$this->forge->addKey('idSlide', true);
		$this->forge->createTable('slide');
	}

	public function down()
	{
		$this->forge->dropTable('slide');
	}
}
