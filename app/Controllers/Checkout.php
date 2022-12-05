<?php

namespace App\Controllers;

use App\Models\M_Order;

class Checkout extends BaseController
{
    protected $m_Order;

    public function __construct()
    {
        $this->m_Order = new M_Order();
    }
    public function index()
    {
        $product = $this->m_Order->findAll();
        $data = [
            'total' => $this->m_Order->countOrder(),
            'product' => $product,
        ];
        echo view('checkout', $data);
    }
    public function update($id)
    {
        $this->m_Order->save([
            'id'            => $id,
            'total'          => $this->request->getVar('total'),
            'quantity'         => $this->request->getVar('quantityEdit'),
        ]);

        return redirect()->to('/checkout');
    }
    public function delete_order($id)
    {
        $this->m_Order->delete($id);
        return redirect()->to('/checkout');
    }
    public function delete_all()
    {
        $this->m_Order->deleteAll();
        return redirect()->to('/');
    }
}
