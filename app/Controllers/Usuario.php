<?php

namespace App\Controllers;

class Usuario extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'    =>  'Usuarios del sistema.'
        ];
        return view('aplicacion/usuarios/inicio', $data);
    }

    public function new()
    {
        $data = [
            'titulo'    =>  'Registrar usuario nuevo' 
        ];
        return view('publico/login/registrarse', $data);
    }
}
