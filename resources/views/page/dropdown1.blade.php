@extends('master.layout')
@section('content')
	<h2 class="mb-0"> REALIDAD  <span class="text-primary">AUMENTADA</span> </h2>
	<p align="justify">
	A continuacion se presentan los trabajos que se ahn desarrollado implementando la tecnologia de realidad aumentada basad en marcadores enfocadas a la educacion, dirigidas a estudiantes de Secundaria en las asignaturas de Matemáticas y Ciencias. </p>
	Cabe destacar que los proyectos estan desasrollados para una resolucion de 2048 x 1536 pixeles.<br><br>
	<section class="resume-section" id="experience">
        <div class="resume-section-content">                    
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Realidad Aumentada enfocada a Geometria</h3>
                    <div class="subheading mb-3">TecNM Campus Culiacán - Universidad Carlos III de Madrid</div>
                    <p align ="justify"> Herramienta de aprendizaje orientada a la solucion de calculo de area y volumen de prismas regulares. Así como a la identificacion de cortes geometricos realizados a cilindros y conos. </p>
					 Hemos dearrollado dos herramientas de aprendizaje con la misma interfaz visual: ARGeo es una herramienta e realidad aumentada y ARGeoITS, es una combinacion de un Sistema Tutor Inteligente que se combina con Realidad Aumentada. ARGeoITS aplica Logica difusa para determinar los niveles de dificultad de los ejercicios.</p>				
					@if( Auth::guest() )
						Inicia sesion para tener acceso a los APK y a las publicaciones. <br>
						 <li><a href="{{ url('/login') }}">Login</a> en el sistema local</li>
						 <li><a href="{{ url('http://127.0.0.1/googlelogin') }}">Login</a> usando una cuenta Google</li>
						 
						 <li><a href="{{ url('/register') }}">Registrar</a> en este sitio web</li>
					@else
						<p> Da clic <a href="http://127.0.0.1/googlelogin/argeo2.apk"> aqui </a> para descargar el APK de ARGeoITS".</p>
					@endif
			
				</div>
				<div class="flex-shrink-0"><span class="text-primary">Diciembre 2018</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Realidad Aumentada orientada a problemas de Quimica</h3>
                    <div class="subheading mb-3">TecNM Campus Culiacán - Universidad Carlos III de Madrid</div>
                    <p  align ="justify">REAQ es una herramienta de aprendizaje enfocada a la identifficacion de enlaces quimicos: enlaces ionicos, enlaces metalicos y enlaces covalentes. El estudiante hace uso de la tecnica de colision y deteccion de marcadores para formar el enlace quimico y se despliegue en pantalla una animacion representando dicho enlace.
					El estudiante tambien puede visualizar las reacciones quimicas al combinar un acido con una base y de represente una reaccion de explosion, de efervecencia o de neutralizacion</p>
					@if( Auth::guest() )
						Inicia sesion para tener acceso a los APK y a las publicaciones. <br>
						 <li><a href="{{ url('/login') }}">Login</a> en el sistema local</li>
						 <li><a href="{{ url('http://127.0.0.1/googlelogin') }}">Login</a> usando una cuenta Google</li>						
						<li><a href="{{ url('/register') }}">Registrar</a> en este sitio web</li>
					@else
						<p> Da clic <a href="http://127.0.0.1/googlelogin/reaq.apk"> aqui </a> para descargar el APK de REAQ".</p> 
			@endif
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Diciembre 2019</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Realidad Aumentada en problemas de Ingenieria</h3>
                    <div class="subheading mb-3">TecNM Campus Culiacán - Universidad Carlos III de Madrid</div>
                    <p align="justify"> Se esta trabajando en la planeacion y desarrollo de un sistema tutor inteligente que apoye a estudiantes de nivel licenciatura en la solucion de problemas de ingenieria apoyados por la realidad aumentada.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Proximamente</span></div>
            </div>                   
        </div>
    </section>          
			
	<hr class="m-0" />
    <!-- PUBLICACIONES-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Publicaciones</h2>
			@if( Auth::guest() )
				Inicia sesion para tener acceso a los APK y a las publicaciones. <br>
				 <li><a href="{{ url('/login') }}">Login</a> en el sistema local</li>
				 <li><a href="{{ url('http://127.0.0.1/googlelogin') }}">Login</a> usando una cuenta Google</li>
				 
				 <li><a href="{{ url('/register') }}">Registrar</a> en este sitio web</li>
			@else
				 	<p> Da clic <a href="http://127.0.0.1/googlelogin/argeo.pdf"> aqui </a> para descargar el articulo "Cuerpos y planos geometricos usando realidad aumentada y computaciona afectiva".</p>
			<p> Da clic <a href="http://127.0.0.1/googlelogin/argeoce.pdf"> aqui </a> para descargar el articulo "Impact of augmented reality technology on academic achievement and motivation of
			students from public and private Mexican schools. A case study in a middle-school geometry course".</p> 
			@endif
			
		                   
        </div>
    </section>
@endsection