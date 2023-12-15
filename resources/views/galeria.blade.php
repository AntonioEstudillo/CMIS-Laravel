@extends('layouts.app')

@section('contenido')
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 carrusel">
        <h2>Construcciones</h2>
        <div id="carruselConstrucciones" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/Construccion-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Construccion-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Construccion-3.jpg" class="d-block w-100" alt="...">
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
      </div>
  
      <div class="col-lg-12 carrusel">
        <h2>Instalaciones</h2>
        <div id="carruselInstalaciones" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/Instalacion-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Instalacion-6.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Instalacion-5.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Instalacion-7.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Instalacion-8.jpeg" class="d-block w-100" alt="...">
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
      </div>
  
      <div class="col-lg-12 carrusel">
        <h2>Mantenimiento</h2>
        <div id="carruselMantenimiento" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/Mantenimiento-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Mantenimiento-4.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Mantenimiento-5.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Mantenimiento-6.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/Mantenimiento-7.jpeg" class="d-block w-100" alt="...">
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
      </div>
    </div>
  </div>
@endsection
