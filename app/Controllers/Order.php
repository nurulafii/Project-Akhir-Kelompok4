<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function index()
    {
        echo view('order');
    }
    public function drink()
    {
        echo view('drink');
    }
    public function food()
    {
        echo view('food');
    }
}
