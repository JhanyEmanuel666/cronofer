<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'tb_produk';
    protected $idp = 'id_produk';

    //membuat random kode otomatis
    public function getKodeProduk()
    {
        $kode = rand();
        return "CROWN" . $kode;
    }

    public function getNewProduk()
    {
        return $this->table($this->table)
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori')
            ->select('*')
            ->orderBy('id_produk','DESC')
            ->limit(4)
            ->get()
            ->getResultArray();
    }

    public function getProduk($id = false)
    {
        if($id === false) {
            return $this->table($this->table)
                ->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori')
                ->join('tb_produk_stok', 'tb_produk_stok.id_produk = tb_produk.id_produk')
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table($this->table)
                ->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori')
                ->join('tb_produk_stok', 'tb_produk_stok.id_produk = tb_produk.id_produk')
                ->select('*')
                ->where('tb_produk.id_produk', $id)
                ->get()
                ->getRowArray();
            }
    }

    public function getAllProduk($id = false)
    {
        if($id === false) {
            return $this->table($this->table)
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table($this->table)
                ->select('*')
                ->where('tb_produk.id_produk', $id)
                ->get()
                ->getRowArray();
            }
    }

    // public function getProdukByKategori($id)
    // {
    //     return $this->db->table($this->table)
    //     ->join('tb_produk_stok', 'tb_produk_stok.id_produk=tb_produk.id_produk')
    //     ->join('tb_shoes_stok', 'tb_shoes_stok.id_produk=tb_produk.id_produk')
    //     ->select('*')
    //     ->where($idk, $id)
    //     ->get()
    //     ->getResultArray();
    // }

    public function insertProduk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateProduk($data, $id)
    {
        return $this->db->table($this->table)->update($data, [$this->idp => $id]);
    }

    public function deleteProduk($id)
    {
        return $this->db->table($this->table)->delete([$this->idp => $id]);
    }

}