<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'    =>  'Iniciar sesi&oacute;n'
        ];
        return view('publico/login/iniciar-sesion', $data);
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function registrar()
    {
        $data = [
            'titulo'    =>  'Registrar usuario nuevo'
        ];
        return view('publico/login/registrarse', $data);
    }

    public function crearRegistro()
    {

    }

}
