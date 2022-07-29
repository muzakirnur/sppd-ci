<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawais extends Migration
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
            'nip' => [
                'type' => 'varchar',
                'constraint' => 255,
                'unique' => true

            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 255,

            ],
            'jabatan_id' => [
                'type' => 'INT',

            ],
            'pangkat_id' => [
                'type' => 'INT',

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
        $this->forge->addForeignKey('jabatan_id', 'jabatans', 'id');
        $this->forge->addForeignKey('pangkat_id', 'pangkats', 'id');


        // Membuat tabel news
        $this->forge->createTable('pegawais', TRUE);
    }

    public function down()
    {
        $this->forge->createTable('pegawais', TRUE);
    }
}
