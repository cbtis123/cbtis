<!DOCTYPE html>
<html lang="en">
	<head>

	<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
		<title>
		Cabecera

		</title>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row">


					<div class="col-md-4"> <img src="{{ asset('images/ieso.png') }}" align="left" height="70%" width="70%" alt="no encontrado">
					</div>

					<div class="col-md-4"><img src="{{ asset('images/seplogo.png') }}" align="center" height="180%" width="81%" alt="no encontrado">
					</div>

				  	<div class="row">

						 @if (Auth::guest())
					  	<div class="col-md-4"><a href="{{ url('/login') }}" class="myButton">Ingresar</a>
						</div>


						<div class="col-md-4">
						</div>
				  		@elseif(Auth::check())
						<div class="col-md-4"><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="myButton">Cerrar Sesion</a>
						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
						</div>

						<div class="col-md-4">
						</div>
						 @endif
						<div class="col-md-4"><a href="#" class="myButton">Pagina Web</a>
						</div>

						<div class="col-md-4">
						</div>

					</div>


				</div>
			</header>



		</div>
		@include('layouts.navbar')
		@yield('content')
	</body>


</html>
