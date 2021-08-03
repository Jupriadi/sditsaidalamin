<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Siswa extends Seeder
{
		public function run()
	{
		$data = [
		'nis'  => '676767676',
		'namasiswa'  => 'Rafan Khaerul Umam',
		'kelamin'  => 'Laki laki',
		'alamat'  => 'Lauk Rurung Timuk, Sembalun Bumbung',
		'tmptlahir'  => 'Sembalun',
		'tgllahir'  => '31 Desember 2015',
		'kelas'  => '1',
		'sekolahasal'  => 'TK Adat',
		'status'  => 'Aktif',
		'photo'  => 'siswa.png',
		'tgldaftarsiswa' => date('Y-m-d'),
		];

	// Using Query Builder
	$this->db->table('siswa')->insert($data);
	}
}
