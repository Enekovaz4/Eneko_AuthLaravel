<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;

class PerfilController extends Controller
{
    
    public function mostrar(){
    	return view ('modificarPerfil');
    }

    public function update(){

    	$usuario = User::find(Auth::user()->id);

    	$usuario->name = $_POST['usuario'];
    	$usuario->email = $_POST['correo'];
    	$usuario->password = $_POST['pass'];

    	$usuario->save();

   		$this->mostrar();
    }

}
