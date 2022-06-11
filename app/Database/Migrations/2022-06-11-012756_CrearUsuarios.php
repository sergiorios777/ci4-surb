<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
                'unique'        => true,
            ],
            'correo' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
                'unique'        => true,
            ],
            'contrasena' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'tipo' => [
                'type'          => 'ENUM',
                'constraint'    => ['admin', 'usuario', 'invitado'],
                'default'       => 'usuario',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tblusuario');
    }

    public function down()
    {
        $this->forge->dropTable('tblusuario');
    }
}
