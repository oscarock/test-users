@extends('layout')

@section('title', 'Portal de ingreso')

@section('content')
	<div class="container">
		<div class="row">
	  		<div class="col-sm-12">
				<br><br>
			  <form class="row g-3" action="searchUsers" method="get" accept-charset="utf-8">
					<div class="col-auto">
						<label for="search" class="visually-hidden">Buscar</label>
						<input type="text" class="form-control" name="search" id="search" placeholder="Ingrese nombre o email">
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-primary mb-3">Buscar</button>
					</div>
				</form>
				<br>
				<table class="table table-hover">
					<tr>
						<th>#</th>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Pais</th>
						<th>Fecha Creado</th>
					</tr>
					@foreach($users as $user)
						<tr>
							<th>{{ $loop->iteration  }}</th>
							<td>{{ $user->document }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->country }}</td>
							<td>{{ $user->created_at }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection