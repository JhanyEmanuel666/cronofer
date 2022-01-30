<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProdukStokModel extends Model
{
	protected $table = 'tb_produk_stok';
	protected $idp = 'tb_produk_stok.id_produk';

	public function getStok($id = false)
    {
        if($id === false) {
            return $this->table($this->table)
                ->join('tb_produk', 'tb_produk.id_produk = tb_produk_stok.id_produk')
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table($this->table)
                ->join('tb_produk', 'tb_produk.id_produk = tb_produk_stok.id_produk')
                ->select('*')
                ->where('tb_produk_stok.id_produk', $id)
                ->get()
                ->getRowArray();
            }
    }

	public function insertStok($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function updateStok($data, $id)
    {
        return $this->db->table($this->table)->update($data, [$this->idp => $id]);
    }

    public function deleteStok($id)
    {
        return $this->db->table($this->table)->delete([$this->idp => $id]);
    }

}