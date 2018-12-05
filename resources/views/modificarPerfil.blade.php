@extends('layouts.mainud6')

<form style="margin-top: 100px; margin-left: 50px;" action="modificarPerfil" method="post">
	@csrf
	<label>Usuario</label><br><input type="" name="usuario" value="{{Auth::user()->name}}"><br><br>
	<label>Correo</label><br><input type="" name="correo" value="{{Auth::user()->email}}"><br><br>
	<label>Contraseña</label><br><input type="" name="pass" value="{{Auth::user()->id}}" required=""><br><br>

	<input type="submit" name="submit"><br><br>
	


</form>