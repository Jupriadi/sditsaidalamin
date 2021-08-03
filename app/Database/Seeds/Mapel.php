<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Mapel extends Seeder
{
	public function run()
	{
		$data = [
		'kodemapel'  => 'k3',
		'mapel'  => 'Pendidikan Agama Islam',
		'gurumapel'  => '10',
		'tgluploadmapel' => date('Y-m-d'),
		'tglubahmapel' =>  date('Y-m-d'),
	];

	// Using Query Builder
	$this->db->table('mapel')->insert($data);
	}
}
