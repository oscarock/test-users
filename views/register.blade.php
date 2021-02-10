@extends('layout')

@section('title', 'Registro')

@section('content')
	<div class="container">
		<div class="row">
	  	<div class="col-sm-6 offset-sm-3">
		<br>
	      <h2 class="text-center">Registrar Usuario</h2>
	      <br>
	      <form action="registerUser" method="post" accept-charset="utf-8" id="form-1">
					<label for="name" class="form-label">Nombre</label>
	        <div class="form-group">
	          <input type="text" name="name" class="form-control"  placeholder="Ingrese su Nombre" id="name" required>
	        </div>
					<label for="document" class="form-label">Documento</label>
					<div class="form-group">
	          <input type="text" name="document" class="form-control"  placeholder="Ingrese su Documento" id="document" required>
	        </div>
					<label for="email" class="form-label">Email</label>
	        <div class="form-group">
	          <input type="email" name="email" class="form-control"  placeholder="Ingrese su Email" id="email" required>
	        </div>
					<label for="password" class="form-label">Password</label>
	        <div class="form-group">
	          <input type="password" name="password" class="form-control"  placeholder="Ingrese su Password" id="password" required>
	        </div>
					<label for="country" class="form-label">Pais</label>
	        <div class="form-group">
	        	<select name="country" id="country" class="form-control custom-select" required>
	        		<option value="">--Seleccionar Pais--</option>
							<option value="CO">Colombia</option>
	          </select>
	        </div>
	        <button type="submit" class="col-sm-12 btn btn-success btn-lg btn-block mt-3">Enviar</button>
	    </div>
	  </div>
	</div>
@endsection