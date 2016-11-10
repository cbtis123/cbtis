<!DOCTYPE html>
<html lang="en">
	<head>

	<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ieso.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/DataTables/media/css/jquery.dataTables.min.css') }}">
	<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	
		<title>@yield('title', '') | Panel de Administracion\</title>
	</head>
	<body>
		@include('layouts.navbar')
		<header>

			<div class="container">
				<div class="row">


					<div class="col-sm-12 col-sm-4"><div></div> <img src="{{ asset('images/ieso.png') }}" align="center" height="70%" width="70%">
					</div>

					<div class="hidden-xs col-sm-4"><img src="{{ asset('images/seplogo.png') }}" align="center" height="70%" width="70%">
					</div>


				</div>
			</div>
			
			
			
			
			
		</header>
		

		<div class="container">
			
			@include('flash::message')
			
			<div class="panel panel-primary">
		    	<div class= "panel-heading">
		    		<h1 class="panel-title">@yield('title')</h1>
		    	</div>

				<div class="panel-body">
					<div class="container-">
						<div class="row">
							
							<div class="col-xs-12">
								@if(count($errors)>0)
							<div class="alert alert-danger" role="alert">
								<ul>
									@foreach($errors->all() as $error)
										<li> {{ $error }}</li>
									@endforeach
								</ul>	
							</div>		
						@endif
						
						@yield('content')	
							</div>
						</div>
					</div>	 
				</div>
			</div>		
		</div>
	</body>
	<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('js/ieso.js') }}"></script>
	<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
	<script>
  $(document).ready(function(){
      $('#mi_tabla').DataTable();
  });
</script>

</html>
