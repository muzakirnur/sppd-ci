<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pegawais';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllData()
    {
        return $this->db->table('pegawais')
            ->join('jabatans', 'jabatans.id=pegawais.jabatan_id')
            ->join('pangkats', 'pangkats.id=pegawais.pangkat_id')
            ->select('pegawais.*, jabatans.id as jabatan_id, jabatans.jabatan, pangkats.id as pangkat_id, pangkats.pangkat, pangkats.golongan')
            ->get()->getResultArray();
    }

    public function getById($idPegawai)
    {
        return $this->db->table('pegawais')
            ->where('pegawais.id', $idPegawai)
            ->join('jabatans', 'jabatans.id=pegawais.jabatan_id', 'left')
            ->join('pangkats', 'pangkats.id=pegawais.pangkat_id')
            ->select('pegawais.*, jabatans.id as jabatan_id, jabatans.jabatan, pangkats.id as pangkat_id, pangkats.pangkat, pangkats.golongan')
            ->get()->getResultArray();
    }
}
