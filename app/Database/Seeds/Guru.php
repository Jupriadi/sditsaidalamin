<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Guru extends Seeder
{
	public function run()
	{
		$data = [
			'niy' => '67678767',
			'status'    => 'GTY',
			'namaguru'    => 'jupriadi',
			'kelamin'    => 'Laki laki',
			'alamat'    => 'Lauk Rurung Timuk, Sembalun Bumbung',
			'tgllahir'=> '06 April 1995',
			'hp' => '+6282339513607',
			'email' => 'jupriadi@sembahulun.com',
			'pendidikan'=> 'S1',
			'jurusan'=> 'Teknik Informatika',
			'gelar'=>'S.Kom',
			'pt'=>'STMIK SZ NW Anjani',
			'photo' => 'guru.png',
			'tgldaftarguru'=> date('Y-m-d'),
	];

	// Using Query Builder
	$this->db->table('guru')->insert($data);
	}
}
