<?php

namespace App\Controllers\Mdashboard;

use App\Controllers\BaseController;
use App\Models\CartModel;

class CartController extends BaseController
{
    
    public function __construct() {
        helper('form');
    }

    public function cek()
    {
        
        // Retrieve the cart contents from the database
        $cart = \Config\Services::cart();
        $cart->contents();
        $response = $cart->contents();
        $data = json_encode($response);
        echo '<pre>';
        print_r($data);
        echo '<pre>';        
    }

    public function addToCart()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => 'sku_1234ABCD',
            'qty'     => 1,
            'price'   => '19.56',
            'name'    => 'T-Shirt',
            'options' => array('Size' => 'L', 'Color' => 'Red')
         ));
    }
}