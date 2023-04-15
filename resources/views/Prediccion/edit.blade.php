@extends('adminlte::page')

@section('title', 'Weather Station')

@section('content_header')
    <h1>Edit prediction...</h1>
@stop

@section('content')
   <form action="/prediccions/{{$prediccion->id}}" method="POST" enctype="multipart/form-data">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$prediccion->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$prediccion->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date class="form-control" value="{{$prediccion->fecha}}">
  </div>
  <a href="/prediccions" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop