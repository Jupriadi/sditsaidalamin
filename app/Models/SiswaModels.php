<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModels extends Model
{
	protected $table                = 'siswa';
	protected $primaryKey           = 'idSiswa';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
			'nis',
			'namasiswa',
			'nik',
			'kelamin',
			'alamat',
			'tmptlahir',
			'tgllahir',
			'kelas',
			'sekolahasal',
			'status',
			'photo',
			'anakKe',
			'jumSaudara',
			'namaAyah',
			'namaIbu',
			'pendAyah',
			'pendIbu',
			'pekAyah',
			'pekIbu',
			'agamaAyah',
			'agamaIbu',
			'alamatAyah',
			'alamatIbu',
			'hpOrtu',
		];

	// Dates
	protected $useTimestamps        = True;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tgldaftarsiswa';
	protected $updatedField         = 'tglubahsiswa';
}
