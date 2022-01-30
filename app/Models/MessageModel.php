<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table    = 'tb_message';
    protected $idm      = 'id_message';

    protected $allowedFields = ['id_message', 'fullname', 'email', 'subject', 'message_text'];

    public function getMessage($id = false)
    {
        if($id === false) {
            return $this->table($this->table)
            ->select('*')
            ->get()
            ->getResultArray();
        } else{
            return $this->table($this->table)
            ->select('*')
            ->where($idm, $id)
            ->get()
            ->getRowArray();
        }
    }

    public function insertMessage($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function deleteMessage($id)
    {
        return $this->db->table($this->table)->delete([$this->idm => $id]);
    }

}