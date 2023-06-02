<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $keyValues = [
            'email'      => 'view-moto@gmail.com',
            'password'   => password_hash('123456', PASSWORD_BCRYPT),
            'firstName'  => 'Jay',
            'middleName' => 'View',
            'lastName'   => 'Moto',
            'creatorId'  => 1,
            'roleId'     => 1
        ];

        $this->db->table('users')->insert($keyValues);
    }
}
