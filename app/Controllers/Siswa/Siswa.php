<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Siswa extends BaseController
{

	public function index()
	{
		$key = $this->request->getVar('q');
		$siswa= $this->cari("siswa",$key);

		$currentPage = $this->request->getVar('page') ? $this->request->getVar('page'):1;
		$data = [
			'judul' => "SISWA",
			'judulhalaman' => 'Data Siswa',
			'datasiswa' => $siswa->orderBy('tglubahsiswa', 'DESC')->paginate(10),
			'pager' => $this->siswa->pager,
			'currentPage' => $currentPage
		];

		return view('pages/admin/siswa/index',$data);
	}
	public function formsiswa($id=false)
	{
		$data = [
			'judul' => "Form Siswa",
			'judulhalaman' => 'Form Siswa',
		];

		if(!($id == false))
		{
			$data['edit'] = 1;
			$data['siswa'] = $this->siswa->find($id);
		}else{
			$data['edit'] = 0;

		}
		return view('pages/admin/siswa/formsiswa',$data);
	}
	
}
