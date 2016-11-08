
<nav class="navbar navbar-inverse">
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
			  <li><a href="{{ url('/alumnos') }}">Alumnos</a></li>
			  <li><a href="{{ url('/profesores') }}">Profesores</a></li>
			  <li class="dropdown">
			  <a href="#" class="drop-toggle" data-toggle="dropdown">Academico <span class="caret"></span>	</a>
			  <ul class="dropdown-menu">
			  	<li><a href="{{ url('/materias') }}" >Materias</a></li>
			  	<li><a href="{{ url('/materias') }}" >Aulas</a></li>
			  	<li><a href="{{ url('/licenciaturas') }}">Licenciaturas</a></li>
			  	<li><a href="{{ url('/grupos') }}">Grupos</a></li>
			  </ul>
			  <li><a href="{{ url('/tutores') }}">Tutores</a></li>
			  <li><a href="{{ url('/horarios') }}">Horarios</a></li>
			  <li><a href="{{ url('/calificaciones') }}">Califiacion</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
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
