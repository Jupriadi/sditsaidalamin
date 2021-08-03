<?php

namespace App\Controllers\Surat;

use App\Controllers\BaseController;

class Surat extends BaseController
{
	public function getsiswa()
	{
		$idsiswa = $this->request->getVar('siswa');

		$getsiswa = $this->siswa->find($idsiswa);

		$data = json_encode($getsiswa);
		echo $data;
	}

	public function keterangansiswa($id=false)
	{
		$siswa = $this->siswa->findAll();
		$data = [
			'judul' => "Surat Keterangan",
			'judulhalaman' => 'Surat Keterangan Aktif Siswa',
			'siswa' => $siswa,
		];
		return view('pages/admin/surat/blangkosuratketerangan',$data);
	}
	public function getsiswabykelas()
	{
		$kelas = $this->request->getVar('kelas');
		$datasiswa = $this->siswa->where('kelas', $kelas)->findAll();
		$data = json_encode($datasiswa);
		echo $data;
	}

	public function cetaksurat()
	{
		$jenis= $this->request->getVar('jenis');
		$siswa= $this->request->getVar('siswa');
		$getsiswa = $this->siswa->find($siswa);
		if($getsiswa['namaAyah'] == "-"){
			$wali = $getsiswa['namaIbu'];
		}elseif($getsiswa['namaAyah'] == ""){
			$wali = $getsiswa['namaIbu'];
		}else{
			$wali = $getsiswa['namaAyah'];
		}
		$data =[
			'siswa' => $getsiswa,
			'wali' => $wali,
			'judul' => 'cetak surat keterangan',
		];
		$data['nis'] = $getsiswa['idSiswa'].substr($getsiswa['tgllahir'],8,2).substr($getsiswa['tgllahir'],5,2).substr($getsiswa['tgllahir'],2,2).substr($getsiswa['tgldaftarsiswa'],2,2);
		return view("pages/admin/surat/$jenis",$data);
	}
}
