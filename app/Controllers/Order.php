<?php

namespace App\Controllers;

use App\Models\M_Product;
use App\Models\M_Order;

class Order extends BaseController
{
    protected $m_Product;
    protected $m_Order;

    public function __construct()
    {
        $this->m_Product = new M_Product();
        $this->m_Order = new M_Order();
    }
    public function index()
    {
        $data = [
            'product' => $this->m_Product->getFood()->getResultArray(),
            'total' => $this->m_Order->countOrder(),
        ];
        echo view('order', $data);
    }
    public function drink()
    {
        $data = [
            'product' => $this->m_Product->getDrink()->getResultArray(),
            'total' => $this->m_Order->countOrder(),
        ];
        echo view('drink', $data);
    }

    public function save()
    {
        $this->m_Order->save([
            'nama'           => $this->request->getVar('nama'),
            'gambar'         => $this->request->getVar('gambar'),
            'harga'          => $this->request->getVar('harga'),
            'quantity'       => $this->request->getVar('quantity')
        ]);
        return redirect()->to('./order');
    }
}
