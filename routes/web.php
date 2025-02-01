<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');


Route::get('/mensajes', [ContactoController::class, 'index'])->name('mensajes.index');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/portafolio', function () {
    return view('portafolio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
