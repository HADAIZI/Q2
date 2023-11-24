<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table      = 'cart';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['fk_product_id', 'qty', 'cost', 'created_at', 'updated_at'];

    public function getCartContents()
    {
        // Retrieve cart contents from the database
        return $this->findAll();
    }

    public function addToCart($productDetails, $quantity)
    {
        // Check if the product is already in the cart
        $existingItem = $this->where('fk_product_id', $productDetails['id'])->first();

        if ($existingItem) {
            // If the product is in the cart, update the quantity
            $quantity += $existingItem['qty'];
            $this->update($existingItem['id'], ['qty' => $quantity]);
        } else {
            // If the product is not in the cart, insert it
            $this->insert([
                'fk_product_id' => $productDetails['id'],
                'qty'           => $quantity,
                'cost'          => $productDetails['price'] * $quantity,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
