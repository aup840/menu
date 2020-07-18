<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mi Proyecto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>

  <body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class ="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Mi pagina </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="navbar-brand"> 
          <a href="{{ url('/') }}">Inicio</a> </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/becas') }}">Becas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/investigacion') }}">Lineas de Investigacion </a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Proyectos
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('dpage1')}}">Realidad Aumentada</a>
            <a class="dropdown-item" href="{{ route('dpage2')}}"">Reconocimiento de Emociones </a>
            <a class="dropdown-item" href="{{ route('dpage3')}}"">Pensamiento Computacional</a>
         <!--       <a class="{{ Request::is('proyectos/dpage3')? 'active': null }}" href="{{ route('dpage3')}}"">Pensamiento Computacional</a> -->
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Estudiantes
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('auriarte')}}">Aldo Uriarte Portillo</a>
            <a class="dropdown-item" href="{{ route('hcardenas')}}">Hector Manuel Cardenas </a>
            <a class="dropdown-item" href="{{ route('mrios')}}">Jose Mario Rios</a>
          </div>
        </li>
      </ul>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> </form>
        <ul class="navbar-nav ml-auto ml-md-0">
		
			@if (Route::has('login'))
				@auth
					<li class="navbar-brand"> {{ Auth::user()->name }}</li>   
				@else
                    <li class="navbar-brand">  Invitado</li>   
				@endauth
			@endif
      
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

               @if (Route::has('login'))
                  <div class="top-right links">
                  @auth
                    <a class="dropdown-item" href="{{ url('/home') }}">Cerrar Sesion</a>
                  @else
                    <a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesion</a>
                  @if (Route::has('register'))
                    <a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>
                  @endif
                  @endauth
              @endif
              <a class="dropdown-item" href="{{ url('contacto') }}">Contacto</a>

            </div>
          </li>
      </ul>
    </div>
    </nav>
  <br>
   
  <div class="container">
    @yield('content')
  </div>

<style>
  #footer {
     position:fixed;
     left:0px;
     bottom:0px;
     height:30px;
     width:100%;
  }
</style>
      <footer class="py-4 bg-light mt-auto" >

          <div class="container-fluid" id="footer">
              <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Derechos reservados &copy; TecNM 2020</div>
                  <div>
                      <a href="#">Politicas de Privacidad</a>
                      &middot;
                      <a href="#">Terminos y condiciones</a>
                  </div>
              </div>
          </div>
      </footer>
  </body>
</html>