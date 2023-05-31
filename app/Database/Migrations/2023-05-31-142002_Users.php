<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true
            ],
            'email' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unique'     => true
            ],
            'password' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'firstName' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'middleName' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'lastName' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'creatorId' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'updatorId' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'roleId' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'createdAt datetime default current_timestamp',
            'updatedAt datetime'
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
