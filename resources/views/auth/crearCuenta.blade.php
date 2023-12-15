@extends('layouts.app')

@section('contenido')
<div class="d-md-flex justify-content-md-center gap-3 align-items-md-center">
    <div class="col-md-6 p-5">
        <img src="{{asset('assets/CMIS-full-blue.png')}}" alt="Imagen registrar" class="img-fluid">
    </div>

    <div class="col-md-4 bg-white p-4 rounded shadow-lg">
        <form action="{{ route('registrar')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-uppercase text-gray-500 fw-bold">Nombre</label>
                
                <input 
                id="name"
                name="name" 
                type="text" 
                placeholder="Coloca aquí tu nombre" 
                class="form-control @error('name') is-invalid @enderror"
                value="{{old('name')}}"
                />

                @error('name') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="username" class="form-label text-uppercase text-gray-500 fw-bold">Username</label>
                
                <input 
                id="username" 
                name="username"
                type="text" 
                placeholder="Coloca aquí tu nombre de usuario" 
                class="form-control @error('username') is-invalid @enderror"
                value="{{old('username')}}"
                />

                @error('username') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>

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
                <label for="password_confirmation" class="form-label text-uppercase text-gray-500 fw-bold">Repetir Contraseña</label>
                
                <input 
                id="password_confirmation" 
                name="password_confirmation"
                type="password" 
                placeholder="Contraseña de registro" 
                class="form-control"
                />

            </div>

            <input type="submit" value="Crear Cuenta" class="btn btn-primary text-uppercase fw-bold w-100">
        </form>
    </div>
</div>

</div>
@endsection