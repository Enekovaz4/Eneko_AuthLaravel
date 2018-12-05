
<div>
	<h1 style="margin: 75px auto 50px auto;">Tus Mensajes, {{Auth::user()->name}}</h1>

	<table border="1">
		<tr>
			<th>Usuario</th>
			<th>Mensaje</th>
		</tr>

		@foreach ($mensajes as $mensaje)
		<tr>
			<td>{{$mensaje->user['name']}}</td>
			<td>{{$mensaje->mensaje}}</td>
		</tr>
		@endforeach

	</table>

	<br>

	<form action="/añadirMensaje" method="post">
		@csrf
		<input type="text" name="mensaje">
		<input type="submit" name="submit">
	</form>

<div