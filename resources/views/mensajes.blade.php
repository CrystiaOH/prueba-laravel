@extends('layout')

@section('content')
<div class="container py-5">
    <h2 class="text-center">Mensajes Recibidos</h2>

    @if(isset($mensajes) && $mensajes->isEmpty())
        <div class="alert alert-warning text-center">
            No hay mensajes aún.
        </div>
    @else
        <table class="table table-striped table-bordered shadow mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mensajes as $mensaje)
                    <tr>
                        <td>{{ $mensaje->id }}</td>
                        <td>{{ $mensaje->nombre }}</td>
                        <td>{{ $mensaje->email }}</td>
                        <td>{{ $mensaje->mensaje }}</td>
                        <td>{{ $mensaje->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
