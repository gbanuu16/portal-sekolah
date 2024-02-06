<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelfoto extends Model
{
    protected $table      = 'foto';
    protected $primaryKey = 'foto_id';
    protected $allowedFields = ['ket_foto', 'nama_foto', 'kompetensi_id'];

    //backend
    public function list($kompetensi_id)
    {
        return $this->table('foto')
            ->where('kompetensi_id', $kompetensi_id)
            ->orderBy('foto_id', 'ASC')
            ->get()->getResultArray();
    }

    public function hapusfoto($kompetensi_id)
    {
        return $this->table('foto')
            ->where('kompetensi_id', $kompetensi_id)
            ->get()->getResultArray();
    }

    public function hapusket($kompetensi_id)
    {
        return $this->table('foto')
            ->where('kompetensi_id', $kompetensi_id)
            ->delete();
    }

    public function detail_foto($id)
    {
        return $this->table('foto')
            ->where('kompetensi_id', $id)
            ->orderBy('foto_id', 'ASC')
            ->get()->getResultArray();
    }
}
