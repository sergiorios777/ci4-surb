<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'     =>  'Iniciar sesi&oacute;n',
        ];
        return view('publico/login/iniciar-sesion', $data);
    }
}
