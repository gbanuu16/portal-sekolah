<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'Validasilogin']);
$routes->get('/auth/dashboard', 'Dashboard::index', ['filter' => 'Validasilogin']);
$routes->get('/auth/berita', 'Berita::index', ['filter' => 'Validasilogin']);
$routes->get('/auth/berita/kategori', 'Berita::kategori', ['filter' => 'Validasilogin']);
$routes->get('/auth/kompetensi', 'Kompetensi::index', ['filter' => 'Validasilogin']);
$routes->get('/auth/pengumuman', 'Pengumuman::index', ['filter' => 'Validasilogin']);
$routes->get('/auth/pengumuman/kelulusan', 'Pengumuman::kelulusan', ['filter' => 'Validasilogin']);
$routes->get('/auth/konfigurasi/web', 'Konfigurasi::index', ['filter' => 'Validasilogin']);
$routes->get('/auth/konfigurasi/user', 'Konfigurasi::user', ['filter' => 'Validasilogin']);
