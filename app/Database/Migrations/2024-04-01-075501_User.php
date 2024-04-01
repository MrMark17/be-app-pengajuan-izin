<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ]
            ]);
            $this->forge->addKey('id_user', true);
            $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
