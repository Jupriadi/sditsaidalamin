<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Controlsiswa extends BaseController
{
	public function simpan($id = false)
    {
        // dd($this->request->getVar());
        // if($this->request->getVar('daftar')=="user"){
        //     dd('user');
        // }else{
        //     dd('admin');
        // }
        // if(!$this->validate([
			
        //     'photosiswa'=>[
		// 		'rules' =>'max_size[photosiswa,2048]|is_image[photosiswa]|mime_in[photosiswa,image/jpg,image/jpeg,image/png]',
		// 		'errors' =>[
		// 			'max_size' => 'File Photo Maximal 2MB',
		// 			'is_image' => 'File yang anda upload bukan format gambar',
		// 			'mime_in' => 'File yang anda upload bukan format gambar'
		// 		]
		// 	],
			
		// ])){
		// 	$validation = \Config\Services::validation();
		// 	// $error = $validation->getError();
		// 	// dd($error);
		// 	session()->setFlashdata('error',$validation->listErrors());
		// 	return redirect()->to('/panel/updateprofdes')->withInput();
		// }

        $data=[];
        $posts = $this->request->getPost();
        $photo = $this->request->getFile('photosiswa');
        $tgllahir = $this->request->getPost('tgl');
        $blnlahir = $this->request->getPost('bln');
        $thnlahir = $this->request->getPost('thn');

        strlen($tgllahir) == 1 ? $tgl="0".$tgllahir : $tgl = $tgllahir;
        strlen($blnlahir) == 1 ? $bln="0".$blnlahir : $bln = $blnlahir;

        $data['tgllahir'] = "$thnlahir-$bln-$tgl";

        
        foreach($posts as $post => $value):
            if($post == 'daftar')continue;
            $data[$post] = htmlspecialchars($value);
        endforeach;
        // dd($data);
    
        if(!($id == false)):
            $data['idSiswa'] = $id;
            $find = $this->siswa->find($id);
            if($photo == ""):
                $data['photo'] = $find['photo'];
            else:
                $namaphoto = $photo->getRandomName();
                $data['photo'] = $namaphoto;
                if(!($find['photo']=='siswa.png')):
                    unlink('assets/photosiswa/'.$find['photo']);
                endif;
                $photo->move('assets/photosiswa/',$namaphoto);
            endif;

        else:

            $tahun=date('y');
            $nis = $tahun. 1 .rand(1000, 9999);
            $data['nis']=$nis;
            if($photo == ""):
                $data['photo'] = 'siswa.png';
            else:
                $namaphoto = $photo->getRandomName();
                $data['photo'] = $namaphoto;
                $photo->move('assets/photosiswa/',$namaphoto);
            endif;

            
        endif;

        $simpan = $this->siswa->save($data);

        if ($simpan):
            if(($this->request->getVar('daftar')=='user'))
            {
                
                session()->setFlashdata('saved','Proses Daftar Berhasil..!');
                return redirect()->to('/');
            }
            session()->setFlashdata('saved','Siswa Berhasil Ditambah..!');
            return redirect()->to('/siswa');
        endif;
    }
    public function hapus($id)
    {
        $find = $this->siswa->find($id);
        // dd($find);
        if(!($find['photo'] == 'siswa.png')){
            unlink('assets/photosiswa/'.$find['photo']);
        }

        $this->siswa->delete($id);
        session()->setFlashdata('saved','Data Berhasil Dihapus..!');
        return redirect()->to('/siswa');
    }

    public function siswaAjax()
    {
        $id = $this->request->getVar('idSiswa');
        $getsiswa = $this->siswa->find($id);
        
        return json_encode($getsiswa);
    }
}
