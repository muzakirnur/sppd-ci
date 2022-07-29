<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlatAngkuts extends Migration
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
            'nama' => [
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
        $this->forge->createTable('alat_angkuts', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('alat_angkuts', TRUE);
    }
}
