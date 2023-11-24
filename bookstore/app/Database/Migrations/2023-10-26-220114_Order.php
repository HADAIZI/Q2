<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'order_id' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'order_amount' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00', 
            ],
            'order_date' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
            'order_status' => [
                'type' => 'TEXT',
            ],
            'fk_userid' => [
                'type' => 'INTEGER',
                'constraint' => 11,
            ],
            'order_type' => [
                'type' => 'TEXT',
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
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
