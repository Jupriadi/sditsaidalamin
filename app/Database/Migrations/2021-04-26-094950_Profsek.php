<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profsek extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'namasekolah'  => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'npsn' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'nis' => [
				'type'              => 'varchar',
                'constraint'        => '50',
				'null'				=> True,
			],
			'nss' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'hp' => [
				'type'              => 'varchar',
                'constraint'        => '15',
			],
			'email' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'website' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'npsn' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],

			'provinsi' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'kabupaten' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'kecamatan' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'desa' => [
				'type'              => 'varchar',
                'constraint'        => '50',
			],
			'logo' => [
				'type'              => 'varchar',
                'constraint'        => '100',
			],

			'tgl_daftar' => [
					'type' => 'DATETIME',
			],
			'tgl_ubah' => [
					'type' => 'DATETIME',
			],
			
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('profsek');
	}

	public function down()
	{
		$this->forge->dropTable('profsek');
	}
}
