@extends('layout')

@section('title', 'errors')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 mt-5">
			<div class="alert alert-success" role="alert">
				<h3 class="text-center">{{ $success }}</h3>
			</div>
		</div>
	</div>
</div>
@endsection