<!DOCTYPE html>
<html lang="en">
<!-- Cabezeras se incluye lo que no se puede ver -->
<head>
	<meta charset="UTF-8">
	<title>CBTIS</title>
	
	 
	 <!--Estilos -->
	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
   			
</head>


	
	

<body>
	<header>
		<div id="cabecera">
		    
			    <div class="container"> 
					<div class="row">
									 
						<div class="col-md-4"> <img src="/cbtis/public/images/engrane.png" align="left" height="50%" width="55%" alt="no encontrado"></div>
						  
						<div class="col-md-4"><img src="/cbtis/public/images/seplogo.png" align="center" height="180%" width="81%" alt="no encontrado"></div> 
					  		
					  	<div class="col-md-4">   <button type="button" class="btn login"><span class="glyphicon glyphicon-plus"></span> Iniciar sesion </button> 	
					  		
					  		<td>
					  			 <button type="button" class="btn login"><span class="glyphicon glyphicon-plus"></span> Cerrar sesion </button> 
					  		</td>

					  		<td>
					  			 <button type="button" class="btn login"><span class="glyphicon glyphicon-plus"></span> Registrarse </button> 
					  		</td>

					  		<td>
					  			 <button type="button" class="btn login"><span class="glyphicon glyphicon-plus"></span> Pagina WEB </button> 
					  		</td>

					  	</div>

					</div>  

				</div>

			</div>


	</header>
	
	<nav>
			@include('layouts.navbar')	
	</nav>
	
	@if(count ($errors) >0)
		<div class="alert alert-danger" role ="alert">	
			<ul>
				@foreach($errors->all() as $error)
					
					<li>{{ $error }}</li>	
				@endforeach
			</ul>
		</div>
	@endif
	
	@yield('content')
	
</body>

<!-- Scripts -->

	 <script src="/js/app.js"></script>
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>

</html>
