@extends('layouts.app')

@section('contenido')
<div class="d-md-flex justify-content-md-center gap-3 align-items-md-center">
    <div class="col-md-6 p-5">
        <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registrar" class="img-fluid">
    </div>

    <div class="col-md-4 bg-white p-4 rounded shadow-lg">
        <form method="POST" action="{{route('login')}}" novalidate>
            @csrf

            @if(session('mensaje'))
            <p class="bg-danger text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p> 
            @endif

            <div class="mb-3">
                <label for="email" class="form-label text-uppercase text-gray-500 fw-bold">Email</label>
                
                <input 
                id="email" 
                name="email"
                type="email" 
                placeholder="Coloca aquí tu correo" 
                class="form-control @error('email') is-invalid @enderror"
                value="{{old('email')}}"
                />

                @error('email') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-uppercase text-gray-500 fw-bold">Contraseña</label>
                
                <input 
                id="password" 
                name="password"
                type="password" 
                placeholder="Contraseña de registro" 
                class="form-control @error('password') is-invalid @enderror"
                />
                @error('password') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label text-gray-500" for="remember">Mantener mi sesión abierta</label>
                </div>
            </div>

            <input type="submit" value="Iniciar sesión" class="btn btn-primary text-uppercase fw-bold w-100">
            <a href="{{route('registrar')}}">Crear cuenta</a>
        </form>
    </div>
</div>

@endsection