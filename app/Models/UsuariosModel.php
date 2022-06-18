<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table         = 'tblusuario';
    protected $primaryKey    = 'id';

    protected $allowedFields = ['usuario', 'correo', 'contrasena'];
}