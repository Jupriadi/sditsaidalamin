<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idSiswa'   => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'nis'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'namasiswa'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'kelamin'  => [
					'type'       => 'VARCHAR',
					'constraint' => '10',
			],
			'alamat'  => [
					'type'       => 'Text',
			],
			'tmptlahir'  => [
					'type'       => 'VARCHAR',
					'constraint' => '70',
			],
			'tgllahir'  => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
			],
			'kelas'  => [
					'type'       => 'INT',
					'constraint' => 1,
			],
			'sekolahasal'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' 		=>True,
			],
			'status'  => [
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
			'tgldaftarsiswa' => [
					'type' => 'DATE',
			],
			'tglubahsiswa' => [
					'type' => 'DATE',
			],

			
			
		]);

		$this->forge->addKey('idSiswa', true);
		$this->forge->createTable('siswa');
	}

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}
