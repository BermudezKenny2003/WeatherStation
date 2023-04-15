@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Weather Station')

@section('content_header')

    <style>
        h1{
            font-family: 'Helveticah';
        }
    </style>
    <body>
        <div id="main-container">
            <h1>Date list...</h1>
        </div>
    </body>
@stop

@section('content')
   <a href="datos/create" class="btn btn-info mb-3">CREAR</a>

<table id="datos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-info text-white">
    <tr>
            <th scope="col">ID</th>
            <th scope="col">Humedad</th>
            <th scope="col">Velocidad del viento</th>
            <th scope="col">Presion</th>
            <th scope="col">Lluvia</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->id}}</td>
            <td>{{$dato->humedad}}</td>
            <td>{{$dato->velocidad_viento}}</td>
            <td>{{$dato->presion}}</td>
            <td>{{$dato->lluvia}}</td>
            <td>{{$dato->fecha}}</td>
            <td>
                <form action="{{ route ('datos.destroy',$dato->id)}}" method="POST">
                <a href="/datos/{{ $dato->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#datos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop