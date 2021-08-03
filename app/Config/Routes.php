<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/panel', 'Admin\Panel::profsek');
$routes->get('/panel/(:any)', 'Admin\Panel::$1');
// mata pelajaran
$routes->get('/mapel', 'Mapel\Mapel::index');
$routes->get('/mapel/(:any)', 'Mapel\Mapel::$1');
$routes->add('/controlmapel', 'Mapel\Controlmapel::index');
$routes->add('/controlmapel/(:any)', 'Mapel\Controlmapel::$1');
//guru
$routes->get('/guru', 'Guru\Guru::index');
$routes->get('/guru/(:any)', 'Guru\Guru::$1');
$routes->add('/controlguru/(:any)', 'Guru\Controlguru::$1');
//Siswa
$routes->get('/siswa', 'Siswa\Siswa::index');
$routes->get('/siswa/(:any)', 'Siswa\Siswa::$1');
$routes->add('/controlsiswa/(:any)', 'Siswa\Controlsiswa::$1');
//suat menyurat
$routes->get('/surat', 'Surat\Surat::index');
$routes->add('/surat/(:any)', 'Surat\Surat::$1');
$routes->add('/controlsurat/(:any)', 'Surat\Controlsurat::$1');
//suat menyurat
$routes->get('/tabungan', 'Tabungan\Tabungan::index');
$routes->add('/tabungan/(:any)', 'Tabungan\Tabungan::$1');
$routes->add('/controltabungan/(:any)', 'Tabungan\Controltabungan::$1');


$routes->get('/progres', 'Progres::index');
$routes->get('/progres/(:any)', 'Progres::$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
