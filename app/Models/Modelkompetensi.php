<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkompetensi extends Model
{
    protected $table      = 'kompetensi';
    protected $primaryKey = 'kompetensi_id';
    protected $allowedFields = ['nama_kompetensi', 'deskripsi_kompetensi', 'slug_kompetensi', 'sampul', 'tgl_kompetensi', 'user_id'];

    //backend
    public function list()
    {
        return $this->table('kompetensi')
            ->join('user', 'user.user_id = kompetensi.user_id')
            ->orderBy('kompetensi_id', 'ASC')
            ->get()->getResultArray();
    }
    public function listjoin()
    {
        return $this->table('kompetensi')
            ->select('*')
            ->join('foto', 'foto.kompetensi_id = kompetensi.kompetensi_id', 'left')
            ->get()->getResultArray();
    }

    public function jumlahfoto()
    {
        return $this->table('kompetensi')
            ->select('kompetensi.kompetensi_id, nama_kompetensi, slug_kompetensi, tgl_kompetensi, sampul, kompetensi.user_id')
            ->join('user', 'user.user_id = kompetensi.user_id', 'left')
            ->groupBy('kompetensi.kompetensi_id')
            ->orderBy('kompetensi.kompetensi_id', 'asc')
            ->get()->getResultArray();
    }

    //frontend
    public function detail_kompetensi($id)
    {
        return $this->table('kompetensi')
            ->join('user', 'user.user_id = kompetensi.user_id')
            ->where('kompetensi_id', $id)
            ->get()->getRow();
    }
}
