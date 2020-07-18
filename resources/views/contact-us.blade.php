@extends('master.layout')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<div class="container">
		<h1>Contact US Form</h1>
		@if(Session::has('success'))
		   <div class="alert alert-success">
		     {{ Session::get('success') }}
		   </div>
		@endif
		<form action="{{ Form::open(['route'=>'contactus.store']) }}" method="post">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" id="fname" name="firstname" placeholder="Escriba su nombre completo.."
				class="form-control">
			</div>
			
			<div class="form-group">
				<label>E-mail</label>					
				<input type="text" id="email" name="email" placeholder="Escriba su correo electronico.."
				class="form-control">
			</div>

			<div class="form-group">
				<label>Telefono</label>					
				<input type="text" id="phone" name="phone" placeholder="Escriba su correo Telefono.."
				class="form-control">
			</div>

			<div class="form-group">
				<label>Mensaje </label>					
				<textarea  name="message" placeholder="Escriba su correo electronico.."
				class="form-control"></textarea>
			</div>
				
			<div class="form-group">
				<button class="btn btn-success">Enviar</button>
			</div>
		</div>
	</form>
@endsection