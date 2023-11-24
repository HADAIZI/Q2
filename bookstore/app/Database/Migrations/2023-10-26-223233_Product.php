<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'product_genre' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'qty' => [
                'type' => 'INTEGER',
                'constraint' => 11,
            ],
            'mrp' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00', 
            ],
            'selling_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00', 
            ],
            'image' => [
                'type' => 'TEXT',
            ],
            'fk_catid' => [
                'type' => 'INTEGER',
                'constraint' => 11,
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
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');

    }
}
