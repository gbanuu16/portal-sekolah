<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelberita extends Model
{
    protected $table      = 'berita ';
    protected $primaryKey = 'berita_id';
    protected $allowedFields = ['judul_berita', 'slug_berita', 'isi', 'gambar', 'tgl_berita', 'status', 'kategori_id', 'user_id'];

    //backend
    public function list()
    {
        return $this->table('berita')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->orderBy('berita_id', 'ASC')
            ->get()->getResultArray();
    }
    //frontend
    public function published()
    {
        return $this->table('berita')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->where('status', 'published')
            ->orderBy('berita_id', 'ASC')
            ->limit(6)
            ->get()->getResultArray();
    }

    public function publishedTerbaru()
    {
        return $this->table('berita')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->where('status', 'published')
            ->orderBy('berita_id', 'DESC')
            ->orderBy('tgl_berita', 'DESC')
            ->limit(3)
            ->get()->getResultArray();
    }

    public function beritaByKategori($kategori)
    {
        return $this->table('berita')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->where('status', 'published')
            ->where('kategori.nama_kategori', $kategori)
            ->orderBy('berita_id', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_berita($slug_berita)
    {
        return $this->table('berita')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->where('slug_berita', $slug_berita)
            ->get()->getRow();
    }

    public function hitung_berita()
    {
        return $this->countAllResults();
    }

    public function kategori()
    {
        return $this->table('berita')
            ->select('nama_kategori')
            ->distinct('nama_kategori')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->where('status', 'published')
            ->get()->getResultArray();
    }

    public function hitung_berita_kategori($kategori)
    {
        return $this->table('berita')
            ->select('COUNT(*) as jumlah')
            ->join('user', 'user.user_id = berita.user_id')
            ->join('kategori', 'kategori.kategori_id = berita.kategori_id')
            ->where('status', 'published')
            ->where('kategori.nama_kategori', $kategori)
            ->get()->getResultArray();
    }
}
