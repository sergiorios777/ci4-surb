<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Panel extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'    =>  'Panel de control del sistema.'
        ];
        return view('aplicacion/panel_app', $data);
    }

    public function clientes()
    {
        $data = [
            'titulo'    =>  'Clientes' 
        ];
        return view('publico/clientes/lista_clientes', $data);
    }

}
