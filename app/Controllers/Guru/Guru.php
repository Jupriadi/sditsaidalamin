<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Guru extends BaseController
{
	public function index()
	{
		$key = $this->request->getVar('q');

		$guru= $this->cari("guru",$key);
		
		$data = [
			'judul' => "Guru",
			'judulhalaman' => 'Guru',
			'dataguru' => $guru->findAll(),
		];
		return view('pages/admin/guru/index',$data);
	}

	public function formguru($id=false)
	{
		$data = [
			'judul' => "Guru",
			'judulhalaman' => 'Form Guru',
            'validation' => \Config\Services::validation(),
		];
		if(!$id==false):
			$data['guru'] = $this->guru->find($id);
			$data['edit'] = 1;
		else:
			$data['edit'] = 0;
			$data['guru'] = "";
		endif;
		// dd($data);
		return view('pages/admin/guru/formguru',$data);
	}
}
