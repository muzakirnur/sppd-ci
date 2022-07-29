<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => password_hash('password', PASSWORD_DEFAULT),
        ];

        $this->db->table('users')->insert($data);
    }
}
