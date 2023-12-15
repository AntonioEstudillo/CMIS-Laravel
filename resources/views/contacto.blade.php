@extends('layouts.app')

@section('contenido')

      <div class="container mt-2">

        <div class="row">

            <h1 class="text-center serviceTitle">Conctactanos</h1>
            <img src="../assets/CMIS-full-blue.png" class="logoContacto centeredImage mb-3" alt="logoCmis">
            <h3 class="display-6 text-center">¿Necesitas una cotización o atención personalizada?</h3>

        </div>

      </div>

      <div class="container contactForm my-4">
        <br>
        <form id="emailForm">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="{{ auth()->user()->email }}">
            <input type="hidden" name="email" value="{{ auth()->user()->email }}">

        </div>
        <div class="form-group">
            <label for="phone">Número Telefónico</label>
            <input type="text" class="form-control" id="phone" placeholder="">
        </div>
        <div class="form-group">
            <label for="message">Cuéntanos en qué podemos ayudarte</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="button">Enviar</button>
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
@endsection