@extends('layouts.plantillabase');

@section('contenido');
<h1>
<x-jet-responsive-nav-link href="{{ route('dashboard') }}">
                {{ __('Menu Pincipal') }}
</x-jet-responsive-nav-link>
</h1>
<h1>Calificaciones De los alumnos Inscritos</h1>

<table class="table table-light table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID Examen</th>
        <th scope="col">Matrícula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Programacion</th>
        <th scope="col">Artes</th>
        <th scope="col">Fisica</th>
        <th scope="col">Promedio Final</th>
    </tr>
</thead>
<tbody>
    @foreach ($res as $res_alu)
    <tr>
        <td>{{$res_alu->id}}</td>
        <td>{{$res_alu->control}}</td>
        <td>{{$res_alu->nombre}}</td>
        <td>{{$res_alu->literatura}}</td>
        <td>{{$res_alu->mates}}</td>
        <td>{{$res_alu->ciencias}}</td>
        <td>{{$res_alu->pfinal}}</td>
        <td>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection