<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

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

    public function create()
    {
        $usuarios = new UsuariosModel();

        if (! $this->validate('signup'))
        {
            $data = [
                'usuario'      =>  $this->request->getPost('usuario'), 
                'correo'       =>  $this->request->getPost('correo'),
                'contrasena'   =>  $this->request->getPost('password'),
            ];

            $usuarios->save($data);
        } else {
            session()->setFlashdata(['validation' => $this->validator]);
            return redirect()->back()->withInput;
        }

        return redirect()->to('/')->with('mensaje', '¡Usuario creado!');
    }
}
