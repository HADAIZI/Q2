<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderItems extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'item_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'item_amount' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00', 
            ],
            'item_qty' => [
                'type' => 'INTEGER',
                'constraint' => 11,
            ],
            'fk_orderid' => [
                'type' => 'INTEGER',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('order_items');
    }

    public function down()
    {
        $this->forge->dropTable('order_items');

    }
}
