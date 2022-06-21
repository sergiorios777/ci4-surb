<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table         = 'tblusuario';
    protected $primaryKey    = 'id';

    protected $allowedFields = ['usuario', 'correo', 'contrasena'];

    public function encryptPassword($contrasenaPlana)
    {
        return password_hash($contrasenaPlana, PASSWORD_DEFAULT);
    }

    public function verifyPassword($contrasenaPlana, $contrasenaHash)
    {
        return password_verify($contrasenaPlana, $contrasenaHash);
    } 
}