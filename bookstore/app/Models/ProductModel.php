<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product'; // Your product table name

    public function getProducts()
    {
        // Fetch all products from the database
        return $this->findAll();
    }
}
