<?php

namespace App\Controllers\Mdashboard;

use App\Controllers\BaseController;

class ProductsController extends BaseController
{
    public function index()
    {
        // Load the model
        $productModel = new \App\Models\ProductModel();

        // Fetch products from the database
        $products = $productModel->getProducts();
        // Load the view and pass data to it
        return view('mdashboard/home', ['products' => $products]);
    }
}
