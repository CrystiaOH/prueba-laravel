@extends('layout')

@section('content')
<div class="text-center py-5">
    <h2>Sobre Nosotros</h2>
    <p class="lead">Somos un equipo apasionado por la fotografía </p>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/foto3.jpg') }}" class="card-img-top" alt="Nuestro Estudio">
                <div class="card-body text-white text-center bg-dark">
                    <h5 class="card-title">Nuestro Estudio</h5>
                    <p class="card-text">Espacios equipados con lo último en tecnología.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/foto2.jpg') }}" class="card-img-top" alt="Nuestro Equipo">
                <div class="card-body text-white text-center bg-dark">
                    <h5 class="card-title">Nuestro Equipo</h5>
                    <p class="card-text">Fotógrafos profesionales con años de experiencia.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/foto4.jpg') }}" class="card-img-top" alt="Nuestro Trabajo">
                <div class="card-body text-white text-center bg-dark">
                    <h5 class="card-title">Nuestro Trabajo</h5>
                    <p class="card-text">Capturamos la esencia de cada momento.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
