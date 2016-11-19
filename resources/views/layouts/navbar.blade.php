
<nav class="navbar navbar-inverse  navbar-fixed-top">
	<div class="container fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar1">

			<ul class="nav navbar-nav">
			  <li><a href="{{ url('/alumnos') }}"><i class="fa fa-graduation-cap"></i> Alumnos</a></li>
			  <li><a href="{{ url('/profesores') }}"><i class="fa fa-users" aria-hidden="true"></i> Profesores</a></li>
			  <li class="dropdown">
			  <a href="#" class="drop-toggle" data-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i> Academico <span class="caret"></span>	</a>

				  <ul class="dropdown-menu">
				  	<li><a href="{{ url('/materias') }}" ><i class="fa fa-book" aria-hidden="true"></i> Materias</a></li>
				  	<li><a href="{{ url('/aulas') }}" ><i class="fa fa-book" aria-hidden="true"></i> Aulas</a></li>
				  	<li><a href="{{ url('/licenciaturas') }}"><i class="fa fa-book" aria-hidden="true"></i> Licenciaturas</a></li>
				  	<li><a href="{{ url('/grupos') }}"><i class="fa fa-book" aria-hidden="true"></i> Grupos</a></li>
				  	<li><a href="{{ url('/calificaciones') }}"><i class="fa fa-book" aria-hidden="true"></i> Califiaciones</a></li>
				  </ul>


			  <li><a href="{{ url('/tutores') }}"><i class="fa fa-users" aria-hidden="true"></i> Tutores</a></li>
			  <li><a href="{{ url('/horarios') }}"><i class="fa fa-clock-o" aria-hidden="true"></i> Horarios</a></li>
				<li><a href="{{ url('/coordinadores') }}"><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Coordinadores</a></li>


			</ul>
			<ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                       <i class="fa fa-fw fa-power-off"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
		</div>
	</div>
</nav>
