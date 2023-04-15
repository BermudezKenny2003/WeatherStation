@extends('adminlte::page')

@section('title', 'Weather Station')

@section('content_header')
   <h1>Create data</h1>
@stop

@section('content')
    
<form action="/datos" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Humedad</label>
    <input id="humedad" name="humedad" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Velocidad del viento</label>
    <input id="velocidad_viento" name="velocidad_viento" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Presion</label>
    <input id="presion" name="presion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lluvia</label>
    <input id="lluvia" name="lluvia" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="5">
  </div>
  <a href="/datos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop