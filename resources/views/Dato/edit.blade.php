@extends('adminlte::page')

@section('title', 'Weather Station')

@section('content_header')
    <h1>Edit date...</h1>
@stop

@section('content')
   <form action="/datos/{{$dato->id}}" method="POST" enctype="multipart/form-data">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Humedad</label>
    <input id="humedad" name="humedad" type="text" class="form-control" value="{{$dato->humedad}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Velocidad del viento</label>
    <input id="velocidad_viento" name="velocidad_viento" type="text" class="form-control" value="{{$dato->velocidad_viento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Presion</label>
    <input id="presion" name="presion" type="text" class="form-control" value="{{$dato->presion}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lluvia</label>
    <input id="lluvia" name="lluvia" type="text" class="form-control" value="{{$dato->lluvia}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" value="{{$dato->fecha}}">    
  </div>
  <a href="/datos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop