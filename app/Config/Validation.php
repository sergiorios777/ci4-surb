<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $signin = [
        'identidad'    => 'required',
        'password'     => 'required',
    ];

    public $signin_errors = [
        'identidad'    => [
            'required' => 'Debe ingresar un nombre de usuario o correo.',
        ],
        'password'     => [
            'required' => 'Debe ingresar una contraseña.',
        ],
    ];

    public $signup = [
        'usuario'      => 'required|min_length[3]|max_length[20]|is_unique[tblusuario.usuario]',
        'correo'       => 'required|valid_email|is_unique[tblusuario.correo]',
        'password'     => 'required|min_length[8]|max_length[14]',
        'pass_confirm' => 'required|matches[password]',
    ];

    public $signup_errors = [
        'usuario'      => [
            'required'       => 'Es necesario escribir un nombre de usuario.',
            'min_length[3]'  => 'Longitud m&iacute;nima de 3 caracteres.',
            'max_length[20]' => 'Longitud m&aacute;xima de 20 caracteres', 
            'is_unique[tblusuario.usuario]' => 'Usuario ya se encuentra registrado.',
        ],
        'password'     => [
            'required'       => 'Es necesaria una contraseña.',
            'min_length[8]'  => 'La longitud m&iacute;nima es de la contraseña es de 8 caracteres.',
            'max_length[14]' => 'La longitud m&aacute;xima de la contraseña es de 14 caracteres.',
        ],
        'pass_confirm' => [
            'required'          => 'Es encesario confirmar la contraseña.',
            'matches[password]' => 'La contraseña no coincide.',
        ],
        'correo'       => [
            'required'                    => 'Es necesario un correo.',
            'valid_email'                 => 'El correo debe ser v&aacute;lido. P.e. usuario@ejemplo.com',
            'is_unique[tblusuario.correo]'=> 'El correo ingresado ya se encuentra registrado.',
        ],
    ];
}
