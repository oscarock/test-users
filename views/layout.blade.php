<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Zinobe</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					@if(isset($authenticated))
						<li class="nav-item float-right">
							<a class="nav-link" aria-current="page" href="/service-external-save">Cargar data externa</a>
						</li>
						<li class="nav-item float-right">
							<a class="nav-link" aria-current="page" href="/logout">Cerrar sesion</a>
						</li>
					@else
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="/">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="/registrarse">Registrarse</a>
						</li>
					@endif
				</ul>
			</div>
			</div>
		</nav>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>