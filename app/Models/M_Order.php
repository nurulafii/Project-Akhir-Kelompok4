<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Order extends Model
{
    protected $table = 'order';
    protected $allowedFields = ['nama', 'gambar', 'harga', 'quantity'];

    public function countOrder()
    {
        $builder = $this->db->table('order');
        return $builder->countAll();
    }
}
