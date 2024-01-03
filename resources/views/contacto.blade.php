@extends('layouts.app')

@section('contenido')
@auth
      <div class="container mt-2">

        <div class="row">

            <h1 class="text-center serviceTitle">Conctactanos</h1>
         
            <h3 class="display-6 text-center">¿Necesitas una cotización o atención personalizada?</h3>

        </div>

      </div>

      <div class="container contactForm my-4">
        <br>
        <form id="emailForm" action="{{route('contacto')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Ejemplo: {{auth()->user()->name}}">
        </div>
          @error('name')
          <p>
            {{$message}}
          </p>
          @enderror
          
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" readonly>
            <input type="hidden" name="email" value="{{ auth()->user()->email }}">
        </div>
          
        <div class="form-group">
            <label for="phone">Número Telefónico</label>
            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="">
        </div>
          @error('telefono')
          <p>
            {{$message}}
          </p>
          @enderror
          
        <div class="form-group">
            <label for="message">Cuéntanos en qué podemos ayudarte</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
        </div>
          @error('mensaje')
          <p>
            {{$message}}
          </p>
          @enderror
          
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">Enviar</button>
        </div>

        </div>

        <div class="container mb-4 contact">

            <h3>O si lo prefieres</h3>

            <div class="row">
                <div class="col">
                    <img src="../assets/598px-WhatsApp_icon.png" alt="Logo whatsapp" class="contactoImg">
                </div>
                <div class="col col d-flex align-items-center">
                    <p class="contactNumber">921 228 6032</p>
                </div>
                <div class="col">
                    <img src="../assets/directionIcon.png" alt="Logo Dirección" class="contactoImg">
                </div>
                <div class="col d-flex align-items-center">
                    <p class="adress">Av. Ignacio Zaragoza 1901, Palma Sola, 96400 Coatzacoalcos, Ver.</p>
                </div>
            </div>


        </div>
        <script>
  if ('{{ session("success") }}') {
    toastify.success("{{ session("success") }}");
  }
</script>

        

@endauth
      
@guest
        
@section('rutas')
  <link  href="{{asset('css/contacto-invitado.css')}}" rel="stylesheet">
@endsection
<div class="container">
  
  <div class="left-section">
    <img src="{{asset('assets/CMIS-full-blue.png')}}" alt="Imagen de fondo">
  </div>

  <div class="right-section">
    <h1>Inicia sesión o crea una cuenta para poder contactarnos</h1>
    <a class="btn btn-primary" href="{{route('login')}}">Iniciar sesión</a>
  </div>
</div>
  
@endguest
@endsection