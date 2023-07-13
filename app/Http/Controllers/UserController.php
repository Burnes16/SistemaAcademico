<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Docente;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function principal(){
        if(session('logged')){
            $data['title']='Home';
            return view('home', $data);
        }else{
            return back()->withErrors(['ERROR' => 'Debes logearte primero']);
        }
    }

    public function login(Request $request)
    {
        $user = User::where('nombre_usuario', $request->nombre_usuario)->first();

        if ($user && Hash::check($request->contraseña_usuario, $user->contraseña_usuario)) {

            $docente = Docente::where('codigo_usuario', $user->codigo_usuario)->first();

            session(['logged'=>true]);

            $datos= $docente->nombre1_docente." ".$docente->apellido1_docente." ".$docente->apellido2_docente;
            $title = 'Home';
            $coddocente = $docente->codigo_docente;

            return view('home', compact('datos', 'title', 'coddocente'))->with('success', 'Inicio de Sesión Correcto');

        } else {

            session(['logged'=>false]);

            return redirect()->back()->withInput()->withErrors(['error' => 'Usuario o contraseña incorrectos']);
            
        }
    }


    public function logout (Request $request){
        session(['logged'=>false]);
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
