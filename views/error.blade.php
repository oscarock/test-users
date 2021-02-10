@extends('layout')

@section('title', 'errors')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 mt-5">
			<div class="alert alert-danger" role="alert">
				<h3 class="text-center">{{ $errors }} <p><a href="/">Volver</a></p></h3>
			</div>
		</div>
	</div>
</div>
@endsection