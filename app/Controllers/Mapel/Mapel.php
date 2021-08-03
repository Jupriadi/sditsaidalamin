<?php

namespace App\Controllers\Mapel;
use App\Controllers\BaseController;

class Mapel extends BaseController
{

	public function index()
	{
		$condition="guru.idGuru=mapel.gurumapel OR mapel.gurumapel=''";
		$data = [
			'judul' => "Mata Pelajaran",
			'judulhalaman' => 'Data Mata Pelajaran',
			'mapel'	=>$this->mapelguru()->findAll(),
			'guru' =>$this->guru->findAll(),
		];

		return view('pages/admin/mapel/mapel',$data);
	}
}
