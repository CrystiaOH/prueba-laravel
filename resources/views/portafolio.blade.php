@extends('layout')

@section('content')
<div class="text-center py-5">
    <h2>Nuestro Portafolio</h2>
    <p class="lead">Mira algunos de nuestros mejores trabajos </p>
</div>

<div class="container">
    <div class="row g-4">
        <div class="col-md-4">
            <img src="{{ asset('images/foto5.jpg') }}" class="img-fluid rounded shadow" alt="Foto 1">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/foto6.jpg') }}" class="img-fluid rounded shadow" alt="Foto 2">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/foto7.jpg') }}" class="img-fluid rounded shadow" alt="Foto 3">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/foto8.jpg') }}" class="img-fluid rounded shadow" alt="Foto 4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/foto9.jpg') }}" class="img-fluid rounded shadow" alt="Foto 5">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/foto10.jpg') }}" class="img-fluid rounded shadow" alt="Foto 6">
        </div>
    </div>
</div>
@endsection
