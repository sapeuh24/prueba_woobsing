<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DevController extends Controller
{
    public function encontrarError()
    {
        $usuarios = array(
            array('nombre' => 'Alex', 'apellido' => 'Escobar', 'telefono' => '3213211212'),
            array('nombre' => 'Juan', 'apellido' => 'Gomez', 'telefono' => '3213211212'),
            array('nombre' => 'Andres', 'apellido' => 'Marín', 'telefono' => '3211112223'),
            array('nombre' => 'Angie', 'apellido' => 'Rivera', 'telefono' => '3213211212'),
        );

        foreach ($usuarios as $usuario) {
            echo $usuario['nombre'] . ' ' . $usuario['apellido'] . ' ' . $usuario['telefono']."<br>";
        }
    }

    public function emailVerify(User $user)
    {
        return view('auth.session_verify');
    }

    public function sessionVerify(User $user)
    {
        $user->ultima_conexion = now();
        $user->save();
        
        return view('auth.session_verify');
    }
}