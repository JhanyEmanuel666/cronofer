<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tb_kategori';
    protected $idd = 'id_kategori';

    protected $allowedFields = ['id_kategori','nama_kategori'];

    public function getKategori($id = false)
    {
        if($id === false) {
            return $this->table('tb_kategori')
            ->select('*')
            ->orderBy('nama_kategori','ASC')
            ->get()
            ->getResultArray();
        } else{
            return $this->table('tb_kategori')
            ->select('*')
            ->where('id_kategori', $id)
            ->get()
            ->getRowArray();
        }
    }

    public function insertKategori($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateKategori($data, $id)
    {
        return $this->db->table($this->table)->update($data, [$this->idd => $id]);
    }

    public function deleteKategori($id)
    {
        return $this->db->table($this->table)->delete([$this->idd => $id]);
    }

}