<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfsekModels;
use App\Models\GuruModels;
use App\Models\SiswaModels;
use App\Models\SlideModels;

class Progres extends BaseController
{
	public function __construct()
	{
		$this->profsek = new ProfsekModels;
		$this->guru = new GuruModels;
		$this->siswa = new SiswaModels;
		$this->slide = new SlideModels;
	}
	
    public function ubahprofil()
    {

        $id=$this->request->getVar('id');
        $logo = $this->request->getFile('logo');
        $find = $this->profsek->find($id);
        // dd( );
        if($logo->getSize() == 0):
            $logoname = $find['logo'];
        else :
            $logoname = $logo->getRandomName();

            if($find['logo']=='sekolah.png'):
                $logo->move('assets/img/',$logoname);
            else:
                $logo->move('assets/img/',$logoname);
                unlink('assets/img/'.$find['logo']);
            endif;
            
        endif;
        
        // dd($find);
        $data = [
            'id' => $id,
            'namasekolah' => htmlspecialchars($this->request->getVar('namasekolah')),
            'npsn' => htmlspecialchars($this->request->getVar('npsn')),
            'nis' => htmlspecialchars($this->request->getVar('nis')),
            'nss' => htmlspecialchars($this->request->getVar('nss')),
            'hp' => htmlspecialchars($this->request->getVar('hp')),
            'email' => htmlspecialchars($this->request->getVar('email')),
            'website' => htmlspecialchars($this->request->getVar('website')),
            'provinsi' => htmlspecialchars($this->request->getVar('provinsi')),
            'kabupaten' => htmlspecialchars($this->request->getVar('kabupaten')),
            'kecamatan' => htmlspecialchars($this->request->getVar('kecamatan')),
            'desa' => htmlspecialchars($this->request->getVar('desa')),
            'logo' => $logoname,
        ];
        // dd($data);
        $simpan = $this->profsek->update($id, $data);
        if($simpan)
        {
            session()->setFlashdata('saved','Data Berhasil Disimpan..!');
            return redirect()->to('/panel/profsek/');
        }
    }

    public function simpansiswa($id = false)
    {
        $data=[];
        $posts = $this->request->getPost();
        $photo = $this->request->getFile('photo');
        // dd($photo);
        foreach($posts as $post => $value):
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
            session()->setFlashdata('saved','Siswa Berhasil Ditambah..!');
            return redirect()->to('/panel/siswa/');
        endif;
    }
    public function hapussiswa($id)
    {
        $find = $this->siswa->find($id);
        // dd($find);
        if(!($find['photo'] == 'siswa.png')){
            unlink('assets/photosiswa/'.$find['photo']);
        }

        $this->siswa->delete($id);
        session()->setFlashdata('saved','Data Berhasil Dihapus..!');
        return redirect()->to('/panel/siswa/');
    }
    public function simpanslide($id=false)
    {
        $file = $this->request->getFile('photo');
        $photoname = $file->getRandomName();
        $pindah = $file->move('assets/slide/',$photoname);
        $data = [
            'deskripsi' =>  $this->request->getVar('desk'),
            'subdeskripsi' =>  $this->request->getVar('subdesk'),
            'file' =>  $photoname,
        ];

        $this->slide->save($data);
        session()->setFlashdata('saved','Data Berhasil Disimpan..!');
        return redirect()->to('/panel/slide/');
    }

}
