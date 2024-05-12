@extends('base')

@section('titulo', 'Autores')

@section('contenido')
    <h1 class="mt-5">Aquí van los autores</h1>

    @if(count($autores) == 0)
        <p>No se encontraron autores en la base de datos</p>
    @else
        <p>Aquí va el listado de autores</p>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="2">Acción</th>
            </tr>
            </thead>
            <tbody>
                @foreach($autores as $autor)
                    <tr>
                        <td>{{ $autor->nombre }}</td>
                        <td><a href="{{ route("autores.editar", $autor->id) }}" class="btn btn-primary btn-xs">Editar</a> </td>
                        <td><a href="" class="btn btn-danger btn-xs">Eliminar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif

    <a class="btn btn-primary" href="{{ route('autores.crear') }}">Agregar autor</a>


@endsection
