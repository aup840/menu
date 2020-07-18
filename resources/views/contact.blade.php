@section('main')
	<h1>Contact us</h1>
    <form action="/contact-us" method="post">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" 
                   class="form-control"
                   placeholder="Your name"
                   required
                   value="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" 
                   class="form-control"
                   placeholder="Your email"
                   required
                   value="">
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" rows="5" 
                      class="form-control"
                      placeholder="Your message"
                      required
                      minlength="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar Mensaje</button>
    </form>
@endsection