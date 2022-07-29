<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pangkats extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'pangkat' => [
                'type' => 'varchar',
                'constraint' => 255,

            ],
            'golongan' => [
                'type' => 'varchar',
                'constraint' => 255,

            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ]
        ];
        // Menambah Fields
        $this->forge->addField($fields);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('pangkats', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pangkats', TRUE);
    }
}
