<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Profsek extends Seeder
{
	public function run()
        {
                $data = [
                        'namasekolah' => 'MI Said Alamin NW Sembalun BUmbung',
                        'npsn'    => '12345678',
                        'nis'    => '12345678',
                        'nss'    => '87654323',
                        'hp'    => '08345343432',
                        'email'=> 'said@alamin.sch',
                        'website'=> 'www.saidalamin.sch',
                        'provinsi'=> 'Nusa Tenggara Barat',
                        'kabupaten'=>'Lombok Timur',
                        'kecamatan'=>'sembalun',
                        'desa'=>'sembalun bumbung',
                        'logo' =>'sekolah.png',
                        'tgl_daftar'=> date('Y-m-d'),
                ];

                // Using Query Builder
                $this->db->table('profsek')->insert($data);
        }
}
