@extends('master.layout')
@section('content')
	<h5>Proporcionanos la siguiente informacion y nos pondemos en contacto a la brevedad posible</h5>

	
		<div class="container">
			<form action="{{url ('/contacto')}}" method="post">
				{{ csrf_field() }}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" id="fname" name="firstname" placeholder="Escriba su nombre completo.."
					class="form-control">
				</div>
				
				<div class="form-group">
					<label>Apellido</label>					
					<input type="text" id="fname" name="lastname" placeholder="Escriba su apellido.."
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
					<textarea  name="content" placeholder="Escriba su correo electronico.."
					class="form-control"></textarea>
				</div>
				
				<input type="submit" class ="btn btn-primary"> </div>
			</form>
		</div>	
@endsection