@extends('layout')

@section('content')
<div class="inicio-bg">
    <div class="contenido text-center">
        <h1>Bienvenido a Nuestro Estudio Fotográfico </h1>
        <p class="lead">Capturamos tus mejores momentos con profesionalismo y creatividad.</p>
        <a href="{{ url('/portafolio') }}" class="btn btn-light mt-3">Ver Portafolio</a>
    </div>
</div>

<div class="container my-5">
    <div class="row">
    <div class="col-md-6">
    <img src="{{ asset('images/foto1.jpg') }}" class="img-fluid w-100 rounded shadow" alt="Estudio Fotográfico">
</div>

        <div class="col-md-6">
            <h3>Nuestros Servicios</h3>
            <p>Ofrecemos sesiones fotográficas para bodas, eventos, retratos y más.</p>
            <ul class="list-group">
                <li class="list-group-item">📸 Fotografía de eventos</li>
                <li class="list-group-item">🎭 Sesiones de retrato</li>
                <li class="list-group-item">🎞️ Edición profesional</li>
            </ul>
        </div>
    </div>
</div>
@endsection
ion
