<?php

namespace App\Controllers\Mdashboard;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {

    }

    public function home()
    {
        return view('mdashboard/home');
    }

    public function productdetails()
    {
        return view('mdashboard/productdetails');
    }

    public function allproducts()
    {
        return view('mdashboard/allproducts');
    }

    public function ordersummary()
    {
        return view('mdashboard/ordersummary');
    }

    public function checkout()
    {
        return view('mdashboard/checkout');
    }



}
