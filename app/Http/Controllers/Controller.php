<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Mensaje;
use Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mensajes () {

    	$mensajes = new Mensaje();

    	$mensajes = $mensajes->where('user_id',Auth::user()->id)->get();

    	return view ('mensajes', ['mensajes'=>$mensajes]);
    }

    public function añadirMensaje() {
    	$mensaje = new Mensaje();

    	$mensaje->mensaje = $_POST['mensaje'];
    	$mensaje->user_id = Auth::user()->id;
    	$mensaje->save();

    	return $this->mensajes();
    }
}
