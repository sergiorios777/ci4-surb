<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'     =>  'Iniciar sesi&oacute;n',
        ];
        return view('publico/login/iniciar-sesion', $data);
    }

    public function iniciarSesion()
    {
        $this->index();
    }

    public function login()
    {
        if ($this->validate('signin'))
        {
            $usuarios = new UsuariosModel();

            $identidad = $this->request->getPost('identidad');
            $password  = $this->request->getPost('password');

            $registro = $usuarios->select('id, usuario, correo, contrasena, tipo')
                                 ->orWhere('usuario', $identidad)
                                 ->orWhere('correo', $identidad)
                                 ->first();

            if (! $registro) return redirect()->back()->with('mensaje', 'Usuario o correo no registrado');

            if ($usuarios->verifyPassword($password, $registro['contrasena']))
            {
                $session = session();
                unset($registro['contrasena']);
                $session->set($registro);
                $session->set('isLoggedIn', true);
    
                return redirect()->to(route_to('panel.inicio'))->with('mensaje', 'Bienvenido ' . $registro['usuario']);    
            }

            return redirect()->back()->with('mensaje', '¡Contraseña equivocada!');

        } else {
            session()->setFlashdata(['validation' => $this->validator]);
            return redirect()->to(route_to('login.ingresar'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        $session->set('isLoggedIn', false);

        return redirect()->to(route_to('inicio.web'))->with('mensaje', 'Ha cerrado correctamente su sesión.');
    }

    public function registrar()
    {
        $data = [
            'titulo'    =>  'Registrar usuario nuevo'
        ];
        return view('publico/login/registrarse', $data);
    }

    public function registrarUsuario()
    {
        if (! $this->validate('signup'))
        {
            session()->setFlashdata(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        } else {

            $usuarios = new UsuariosModel();

            $data = [
                'usuario'      =>  $this->request->getPost('usuario'), 
                'correo'       =>  $this->request->getPost('correo'),
                'contrasena'   =>  $usuarios->encryptPassword($this->request->getPost('password')),
            ];

            $usuarios->save($data);
            return redirect()->to(route_to('login.ingresar'))->with('mensaje', '¡Usuario creado!');
        }
    }

}
