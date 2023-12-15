@extends('layouts.app')

@section('contenido')

      <!-- Carrousel -->

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/obras-civiles1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/architect-obra-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/Captura-3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Carrousel -->

      <!-- Content -->

      <div class="container my-4">


          <div class="row align-items-center">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

              <h3 class="display-6">CMIS Construcciones</h3>
              <p>Crea un futuro sólido con CMIS Construcciones: tu socio confiable en proyectos de construcción y obras civiles. Explora nuestros servicios de alta calidad y experimenta la excelencia en cada detalle.</p>

            </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <img class="img-fluid" src="/assets/principal1.jpg" alt="image">

           </div>

          </div>

          <div class="row my-3 card-deck d-flex">
            
            <div class="col-xs-1 col-sm-4 col-md-4 col-lg-4 col-xl-4">

              <div class="card h-100" style="width: 18rem;">
                <img src="/assets/construccion.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Construye tus sueños con nosotros: CMIS Construcciones, tu socio confiable en proyectos de construcción y obras civiles.</p>
                  <a href="{{route('servicios')}}" class="btn btn-primary">Ver más</a>
                </div>
              </div>

            </div>

            <div class="col-xs-1 col-sm-4 col-md-4 col-lg-4 col-xl-4">

              <div class="card h-100" style="width: 18rem;">
                <img src="/assets/electricista-de-confianza.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Instala innovación y calidad en cada rincón</p> <br> <br>
                  <a href="{{route('servicios')}}" class="btn btn-primary">Ver más</a>
                </div>
              </div>

            </div>

            <div class="col-xs-1 col-sm-4 col-md-4 col-lg-4 col-xl-4">

              <div class="card h-100" style="width: 18rem;">
                <img src="/assets/Beneficios-del-mantenimiento-preventivo-del-aire-acondicionado-Macrofilter-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Explora nuestros servicios de alta calidad y experimenta la excelencia en cada detalle.</p> <br>
                  <a href="{{route('servicios')}}" class="btn btn-primary">Ver más</a>
                </div>
              </div>

            </div>

          </div>

      </div>

      <div class="container">

        <br>
        <h4 class="display-3 text-center">En CMIS Construcciones, comprendemos que la construcción de un futuro sólido comienza con una base sólida.</h4>
        <br><br><br>

      </div>

      <!-- Content  -->

@endsection