<?php

namespace App\Controllers;

use App\Models\M_Product;

class Order extends BaseController
{
    protected $m_Product;
    public function __construct()
    {
        $this->m_Product = new M_Product();
    }
    public function index()
    {
        $data = [
            'product' => $this->m_Product->getFood()->getResultArray(),
        ];
        echo view('order', $data);
    }
    public function drink()
    {
        $data = [
            'product' => $this->m_Product->getDrink()->getResultArray(),
        ];
        echo view('drink', $data);
    }
}
