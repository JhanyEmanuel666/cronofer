<?php

namespace App\Models;

use CodeIgniter\Model;

class SlideModel extends Model
{
    protected $table = 'tb_slide';
    protected $idd = 'id_slide';

    protected $allowedFields = ['id_slide','img_slide'];

    public function getSlide($id = false)
    {
        if($id === false) {
            return $this->table('tb_slide')
            ->select('*')
            ->get()
            ->getResultArray();
        } else{
            return $this->table('tb_slide')
            ->select('*')
            ->where($idd, $id)
            ->get()
            ->getRowArray();
        }
    }

    public function insertSlide($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateSlide($data, $id)
    {
        return $this->db->table($this->table)->update($data, [$this->idd => $id]);
    }

    public function deleteSlide($id)
    {
        return $this->db->table($this->table)->delete([$this->idd => $id]);
    }

}