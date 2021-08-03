<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Controlguru extends BaseController
{
	public function index()
	{
		//
	}

    public function simpan($id=false)
    {
        $data=[];
        $posts = $this->request->getPost();
        $photo = $this->request->getFile('photo');
        // dd($photo);
        foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);

        endforeach;

        // kelola gambar
        
        
        if(!$id == false):
            $data['idGuru'] = $id;
            $find = $this->guru->find($id);
            if($photo == ""):
                $data['photo'] = $find['photo'];
            else:
                $namaphoto = $photo->getRandomName();
                $data['photo'] = $namaphoto;
                if(!($find['photo']=='guru.png')):
                    unlink('assets/photoguru/'.$find['photo']);
                endif;
                $photo->move('assets/photoguru/',$namaphoto);
            endif;

        else:
            if($photo == ""):
                $data['photo'] = 'guru.png';
            else:
                $namaphoto = $photo->getRandomName();
                $data['photo'] = $namaphoto;
                $photo->move('assets/photoguru/',$namaphoto);
            endif;

        endif;

        $simpan = $this->guru->save($data);

        if ($simpan):
            session()->setFlashdata('saved','Guru Berhasil Ditambah..!');
            return redirect()->to('/guru');
        endif;
        
    }

    public function hapus($id)
    {
        $find = $this->guru->find($id);
        // dd($find);
        if(!($find['photo'] == 'guru.png')){
            unlink('assets/photoguru/'.$find['photo']);
        }

        $this->guru->delete($id);
        session()->setFlashdata('saved','Data Berhasil Dihapus..!');
        return redirect()->to('/guru');
    }

}
