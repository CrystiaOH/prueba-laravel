// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nosotros', [PageController::class, 'about'])->name('about');
Route::get('/portafolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contacto', [PageController::class, 'contact'])->name('contact');

// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function contact() {
        return view('contact');
    }
}

// resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">Portafolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

// resources/views/home.blade.php
@extends('layouts.app')
@section('content')
    <h1>Bienvenido a nuestra Landing Page</h1>
@endsection

// resources/views/about.blade.php
@extends('layouts.app')
@section('content')
    <h1>Sobre Nosotros</h1>
@endsection

// resources/views/portfolio.blade.php
@extends('layouts.app')
@section('content')
    <h1>Nuestro Portafolio</h1>
@endsection

// resources/views/contact.blade.php
@extends('layouts.app')
@section('content')
    <h1>Contacto</h1>
@endsection
