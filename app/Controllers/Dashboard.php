<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('login');
        }

        $kompetensi = $this->kompetensi->selectCount('kompetensi_id')->first();
        $berita = $this->berita->selectCount('berita_id')->first();

        $pengumuman = $this->pengumuman->selectCount('pengumuman_id')->first();
        $data = [
            'title' => 'Admin - Dashboard',

            'kompetensi' => $kompetensi,
            'berita' => $berita,

            'pengumuman' => $pengumuman,
        ];
        return view('auth/dashboard', $data);
    }
}
