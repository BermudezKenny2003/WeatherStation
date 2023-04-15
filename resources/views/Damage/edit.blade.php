@extends('adminlte::page')

@section('title', 'Weather Station')

@section('content_header')
    <h1>Editar Daños</h1>
@stop

@section('content')
   <form action="/damages/{{$damage->id}}" method="POST" enctype="multipart/form-data">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$damage->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$damage->descripcion}}">
  </div>
  <a href="/damages" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop