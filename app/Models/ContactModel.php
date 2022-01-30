<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'tb_contact';
    protected $idc = 'id_contact';

    protected $allowedFields = ['id_contact', 'phone', 'email', 'alamat','fb', 'ig', 'twt', 'ytb'];

    public function getContact($id = false)
    {
        if($id === false) {
            return $this->table($this->table)
            ->select('*')
            ->get()
            ->getRowArray();
        } else{
            return $this->table($this->table)
            ->select('*')
            ->where([$this->idc => $id])
            ->get()
            ->getRowArray();
        }
    }

    public function updateContact($data, $id)
    {
        return $this->db->table($this->table)->update($data, [$this->idc => $id]);
    }

    public function deleteContact($id)
    {
        return $this->db->table($this->table)->delete([$this->idc => $id]);
    }

}