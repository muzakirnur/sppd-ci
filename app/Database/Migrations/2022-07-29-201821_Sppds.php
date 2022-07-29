<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sppds extends Migration
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
            'pegawai_id' => [
                'type' => 'INT',
                'constraint' => 5,

            ],
            'no_sppd' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'alat_angkut_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'lama_perjalanan' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'berangkat' => [
                'type' => 'datetime',
            ],
            'kembali' => [
                'type' => 'datetime',
            ],
            'pengikut_id' => [
                'type' => 'INT',
                'constraint' => 5,

            ],
            'tempat_berangkat' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'tempat_tujuan' => [
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

        // Adding Foreign Key
        $this->forge->addForeignKey('pegawai_id', 'pegawais', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('alat_angkut_id', 'alat_angkuts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('pegawai_id', 'pegawais', 'id', 'CASCADE', 'CASCADE');

        // Membuat tabel news
        $this->forge->createTable('sppds', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('sppds', TRUE);
    }
}
