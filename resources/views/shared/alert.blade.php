@extends('master.layout')
@section('content')

	<h1>Contactanos</h1>
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<p>{!! session()->get('success') !!}</p>
		</div>
	@endif
	@if (!session()->has('success'))
		<form action="/contact-us" method="post">
		  @csrf
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" 
					   class="form-control"
					   placeholder="Escriba su nombre"
					   required
					   value="{{ old('name') }}">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" 
					   class="form-control"
					   placeholder="Escriba su email"
					   required
					   value="{{ old('email') }}">
			</div>
			<div class="form-group">
				<label for="message">Mensaje</label>
				<textarea name="message" id="message" rows="5" 
						  class="form-control"
						  placeholder="Escriba su mensaje"
						  required
						  minlength="10">{{ old('message') }}</textarea>
			</div>
			<button type="submit" class="btn btn-success">Enviar Mensaje</button>
		</form>
	@endif
@endsection