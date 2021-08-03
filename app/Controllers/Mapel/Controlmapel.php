<?php

namespace App\Controllers\Mapel;
use App\Controllers\BaseController;

class Controlmapel extends BaseController
{

	public function simpan($id=false)
	{
        $data=[];
        $posts = $this->request->getPost();
        // dd($photo);
        foreach($posts as $post => $value):
            $data[$post] = htmlspecialchars($value);
        endforeach;
        if(!$id==false) :
                $data['id']=$id;
        endif;
        // dd($data);
        $simpan = $this->mapel->save($data);
        if ($simpan):
            session()->setFlashdata('saved','Mapel Berhasil Ditambah..!');
            return redirect()->to('/mapel');
        endif;

	}
    public function hapus($id){
        $this->mapel->delete($id);
        session()->setFlashdata('saved','Mapel Berhasil Dihapus..!');
        return redirect()->to('/mapel');
    }

	public function getmapel(){
		$id = $this->request->getPost('id');
        $mapel = $this->mapelguru()->where('id',$id)->first();
        return json_encode($mapel);
	}
}
