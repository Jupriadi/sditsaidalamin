<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\ProfsekModels;
use App\Models\GuruModels;
use App\Models\SiswaModels;
use App\Models\MapelModels;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form','array','url'];
	protected $profsek;
	protected $guru;
	protected $siswa;
	protected $mapel;
	public function __construct()
	{
		$this->profsek = new ProfsekModels;
		$this->guru = new GuruModels;
		$this->siswa = new SiswaModels;
		$this->mapel = new MapelModels;
	}
	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
	}
	public function cari($cari, $keyword){

		$keyword = $this->request->getVar('q');
		if($keyword == false):
			$datasiswa = $this->$cari;
		else:
			$datasiswa = $this->$cari->like('nama'.$cari,$keyword);
		endif;

		return $datasiswa;
		
	}
	
	public function mapelguru(){

        $condition="guru.idGuru=mapel.gurumapel OR mapel.gurumapel=''";
        $mapel = $this->mapel->join('guru',$condition);

		return $mapel;
	}
}
