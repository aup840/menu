@extends('master.layout')
@section('content')
	<h1>Contact us</h1>
	
	  <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
  <form action="" method="post" action="{{ route('contact.store') }}">

          @csrf
		  
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Escribe tu nombre" required value="">

        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

		
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Escribe tu Correo" required value="">

        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Escribe tu telefono a 10 digitos" required value="">>

        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject placeholder="Asunto...." required value="">
            id="subject">

        @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" 
            rows="4" placeholder="Escribe tu mensaje" required minlength="10"> </textarea>

        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
@endsection