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
        <form>


            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              
              <div class="form-group">
                  <label for="exampleFormControlInput1">Correo Electronico</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{auth()->user()->email}}">
                </div>
                
                
            <div class="form-group">
                <label for="exampleFormControlInput1">Número Telefonico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
              <label for="exampleFormControlTextarea1">Cuentanos en que podemos ayudarte</label>
              <textarea class="form-control textAreaa" id="exampleFormControlTextarea1" rows="3"></textarea>
                <br>
              

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-secondary" type="button">Enviar</button>
                  </div>       
                  <br>       
                  

            </form>

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
        
      
     

      <!-- Content  -->


      <!-- Footer -->

      <div class="container-fluid">

        <div class="row">
          <footer id="footer" class="py-3">

            <ul class="nav justify-content-center">

            </ul>
            <p class="text-center text-muted p-footer"> © <span id="currentYear"></span> CMIS Construcciones </p>

          </footer>
        </div>
      </div>
@endsection