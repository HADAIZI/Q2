<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'fk_product_id' => [
                'type' => 'INTEGER',
                'constraint' => 11,
            ],
            'qty' => [
                'type' => 'INTEGER',
                'constraint' => 11,
            ],
            'cost' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00', 
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => null,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => null,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('cart');
    }

    public function down()
    {
        $this->forge->dropTable('cart');

    }
}
