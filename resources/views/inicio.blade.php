@extends('plantilla')
@section('contenido')
<div class="row justify-content-center">
    <div class="col-10">
        <h1>League of Legends</h1>
        <p>Hola brou, Bienvenido a esta primera pagina.</p>
        <p>En las 5 vistas para ti podras encontrar el mejor contenido de los top 5 mejores personajes de League of Legends.</p>
        <img src="{{ asset('images/lol.jpg') }}" alt="" class="img-fluid">
    </div>
</div>
@endsection
