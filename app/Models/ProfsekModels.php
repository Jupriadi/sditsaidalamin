<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfsekModels extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'profsek';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
			'namasekolah',
			'npsn',
			'nis',
			'nss',
			'hp',
			'email',
			'website',
			'provinsi',
			'kabupaten',
			'kecamatan',
			'desa',
			'logo',
		
		];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tgl_daftar';
	protected $updatedField         = 'tgl_ubah';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
