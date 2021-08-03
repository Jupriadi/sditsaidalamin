<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModels extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'guru';
	protected $primaryKey           = 'idGuru';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
							'niy',
							'status',
							'namaguru',
							'kelamin',
							'alamat',
							'tgllahir',
							'hp',
							'email',
							'pendidikan',
							'jurusan',
							'gelar',
							'pt',
							'photo',
						];

	// Dates
	protected $useTimestamps        = True;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'tgldaftarguru';
	protected $updatedField         = 'tglubahguru';

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
