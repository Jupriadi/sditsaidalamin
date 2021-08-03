<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfsekModels;
use App\Models\GuruModels;
use App\Models\SiswaModels;

class Panel extends BaseController
{
	public function __construct()
	{
		$this->profsek = new ProfsekModels;
		$this->guru = new GuruModels;
		$this->siswa = new SiswaModels;
	}

	public function index()
	{
		$data = [
			'judul' => "Admin",
			'judulhalaman' => 'Dashboard'
		];
		return view('pages/admin/index',$data);
	}

	public function profsek($id = false)
	{

		$data = [
			'judul' => "Profil Sekolah",
			'judulhalaman' => 'Profil Sekolah',
			'profil' => $this->profsek->first(),
            'validation' => \Config\Services::validation(),
		];
		if($id == false)
		{

			return view('pages/admin/profsek/index',$data);
		}else{
			return view('pages/admin/profsek/editprofsek',$data);

		}
	}
}
