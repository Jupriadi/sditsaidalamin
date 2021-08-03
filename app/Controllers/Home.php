<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$profil = $this->profsek->first();
		$data = [
			'judul' => 'SDIT Said Alamin',
			'profil' => $profil,
		];
		return view('/pages/user/index',$data);
	}
}
