<?php

namespace App\Controllers\Mapel;
use App\Controllers\BaseController;

class Router extends BaseController
{

	public function index()
	{
        dd('hello');
		$data = [
			'judul' => "Mata Pelajaran",
			'judulhalaman' => 'Data Mata Pelajaran'
		];
		return view('pages/admin/mapel/mapel',$data);
	}
}
