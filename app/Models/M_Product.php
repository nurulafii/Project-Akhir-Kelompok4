<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Product extends Model
{
    protected $table = 'product';

    public function getFood()
    {
        $builder = $this->db->table('product');
        $builder->select('*');
        $builder->where('kategori', 'makanan');
        return $builder->get();
    }
    public function getDrink()
    {
        $builder = $this->db->table('product');
        $builder->select('*');
        $builder->where('kategori', 'minuman');
        return $builder->get();
    }
}
