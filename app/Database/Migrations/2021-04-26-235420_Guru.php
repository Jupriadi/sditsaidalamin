<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idGuru'   => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'niy'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'status'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'namaguru'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'kelamin'  => [
					'type'       => 'VARCHAR',
					'constraint' => '10',
			],
			'alamat'  => [
					'type'       => 'Text',
					'null' 		=>True,
			],
			'tgllahir'  => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
					'null' 		=>True,
			],
			'hp'  => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
					'null' 		=>True,
			],
			'email'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'pendidikan'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'jurusan'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'gelar'  => [
					'type'       => 'VARCHAR',
					'constraint' => '10',
					'null' 		=>True,
			],
			'pt'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'photo'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
					'default'   =>'guru.png',
			],
			'tgldaftarguru' => [
					'type' => 'DATETIME',
			],
			'tglubahguru' => [
					'type' => 'DATETIME',
			],

			
			
		]);

		$this->forge->addKey('idGuru', true);
		$this->forge->createTable('guru');
	}

	public function down()
	{
		$this->forge->dropTable('guru');
	}
}
