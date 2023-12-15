<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href="{{asset('css/styles.css')}}" rel="stylesheet">
    <title>CMIS Construcciones</title>
    @stack('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="{{asset('js/index.js')}}" defer></script>

  </head>

  <body>

<!-- header -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}"> 
    <img src="../assets/CMIS-full-white.png" alt="logo cmis" class="logo_menu" style="margin-left: 30px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link custom" href="{{ route('servicios') }}"> Servicios </a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom" href="{{ route('galeria') }}"> Galeria de Servicios </a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom" href="{{ route('acercaDe') }}">Acerca de</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link custom" href="{{ route('contacto') }}">Contacto</a>
      </li>
      <li class="nav-item"> 
        @guest
          <a class="nav-link custom" href="{{ route('login') }}">Inicia sesión</a>
        @endguest
        @auth
        <div class="dropdown">
          <a class="nav-link dropdown-toggle custom" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Hola: <span class="font-normal">{{ auth()->user()->username }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">Cerrar sesión</button>
            </form></li>
          </ul>
        </div>
        @endauth
        
      </li>

      
    </ul>
  </div>
</nav>

      <!-- header -->


      @yield('contenido')

     

      <!-- Content  -->


      <!-- Footer -->

      <div class="container-fluid">

        <div class="row">
          <footer id="footer" class="py-3">

            <ul class="nav justify-content-center">

            </ul>
            <p class="text-center text-muted p-footer"> © <span id="currentYear">{{now()->year}}</span> CMIS Construcciones </p>

          </footer>
        </div>
      </div>

      <!-- Footer -->
    
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    