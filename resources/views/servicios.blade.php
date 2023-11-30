@extends('layouts.app')

@section('contenido')

<div class="container mt-2">

    <div class="row">

        <H1 class="text-center serviceTitle">Servicios CMIS</H1>
    </div>

    <div class="row-4">
        <div class="constructionServiceIcon d-flex flex-column align-items-center">
            <a href="#constructionService" class="redirectionService">
                <img src="../assets/constructionIcon.png" alt="" class="iconService">

                <H3 class="textIcon display-5">Construcción</H3>
            </a>
        </div>
    </div>

    <hr>

    <div class="row-4">
        <div class="constructionServiceIcon d-flex flex-column align-items-center">
            <a href="#installationService" class="redirectionService">
                <img src="../assets/installationIcon.png" alt="" class="iconService">

                <H3 class="textIcon display-5">Instalaciones</H3>
            </a>
        </div>
    </div>

    <hr>

    <div class="row-4">
        <div class="constructionServiceIcon d-flex flex-column align-items-center">
            <a href="#maintenanceService" class="redirectionService">
                <img src="../assets/maintenanceIcon.png" alt="" class="iconService">

                <H3 class="textIcon h3-smaller display-5" id="constructionService">Mantenimiento</H3>
            </a>
        </div>
    </div>



    <hr>

    <!-- <div class="row justify-content-center">
          <img src="../assets/CMIS-full-blue.png" alt="CMIS Logo" class="logo-azul-servicios">
        </div> -->



</div>


<div class="container">

    <div class="row align-items-center mt-5">



        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <h3 class="display-6">Construcción</h3>
            <p>Te construimos el proyecto de tus sueños, ya sea una casa acogedora o un edificio comercial. Confía en nosotros para crear estructuras sólidas que cumplan con tus expectativas. Transformamos tus ideas en realidad sólida.</p>
            <button type="button" class="btn btn-info btn-sm" id="installationService">Info</button>

        </div>


        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <img src="../assets/constructionService.jpg" alt="construction service" class="img-fluid servicesImages">

        </div>

    </div>


    <div class="row align-items-center mt-5">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <img src="../assets/installationService.jpg" alt="installation service" class="img-fluid servicesImages">

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <h3 class="display-6">Instalaciones</h3>
            <p>Explora una variedad de servicios de instalaciones que abarcan electricidad, fontanería, sistemas de climatización y más. Nuestra prioridad es garantizar tu comodidad y seguridad a través de instalaciones expertas.</p>
            <button type="button" class="btn btn-info btn-sm rightBtn">Info</button>


        </div>

    </div>

    <div class="row align-items-center mt-5 mb-3">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <h3 class="display-6">Mantenimiento</h3>
            <p>Descubre servicios integrales de mantenimiento y prevención, nos ocupamos de todo para tu comodidad, desde reparaciones hasta mejoras, para asegurarnos de que todo funcione sin problemas.</p>
            <button type="button" class="btn btn-info btn-sm ">Info</button>


        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <img src="../assets/maintenanceService.jpg" alt="maintenance service" class="img-fluid servicesImages">

        </div>

    </div>

</div>

@endsection
