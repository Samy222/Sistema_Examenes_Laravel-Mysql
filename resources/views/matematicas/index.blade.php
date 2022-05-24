@extends('layouts.plantillabase');

@section('contenido');
<h3 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-jet-responsive-nav-link href="{{ route('profesor.banco') }}">
                {{ __('Regresar') }}
            </x-jet-responsive-nav-link>
        </h3>
<h1>Preguntas Artes</h1>
<a href="matematicas/create" class="btn btn-primary">Crear</a>

<table class="table table-light table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Opción A</th>
        <th scope="col">Opción B</th>
        <th scope="col">Opción C</th>
        <th scope="col">Respuesta</th>
    </tr>
</thead>
<tbody>
    @foreach ($tema3 as $tema)
    <tr>
        <td>{{$tema->id}}</td>
        <td>{{$tema->pregunta}}</td>
        <td>{{$tema->opcion_a}}</td>
        <td>{{$tema->opcion_b}}</td>
        <td>{{$tema->opcion_c}}</td>
        <td>{{$tema->respuesta}}</td>
        <td>
            <form action="{{route ('matematicas.destroy',$tema->id)}}" method="POST">
            <a href="/matematicas/{{$tema->id}}/edit" class="btn btn-info">Editar</a>
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection