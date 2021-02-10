@extends('layout')

@section('title', 'Login')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<br>
			<h2 class="text-center">Login de acceso</h2>
			<br>
			<form action="loginUser" method="post" accept-charset="utf-8" id="form-login">
				<label for="email" class="form-label">Email</label>
				<div class="form-group">
					<input type="email" name="email" class="form-control"  placeholder="Ingrese su Usuario" id="email" required>
				</div>
				<label for="password" class="form-label">Password</label>
				<div class="form-group">
					<input type="password" name="password" class="form-control"  placeholder="Ingrese su Password" id="password" required>
				</div>
				<button type="submit" class="col-sm-12 btn btn-success btn-lg btn-block mt-3">Ingresar</button>
			</form>
		</div>
	</div>
</div>
@endsection