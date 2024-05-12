@extends('base')

@section('titulo', 'Autores')

@section('contenido')
    <h1 class="mt-5">Editar autor</h1>

    <form method="POST" action="{{ route("autores.actualizar", $autor->id) }}">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del autor" value="{{ $autor->nombre }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar autor</button>
        </div>
    </form>

    <a class="btn btn-secondary" href="{{ route('autores') }}">Volver al listado de autores</a>

@endsection
