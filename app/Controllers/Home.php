<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'    =>  'Web para prácticas de ci4.'
        ];
        return view('publico/inicioweb', $data);
    }
}
