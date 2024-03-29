@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Soy Del Cauca Guia Turistica')

@section('content_header')
    <h1>asignar un rol</h1>
@stop

@section('content')
         
     @if (session('info'))
     <div class="alert alert-success">
          <strong>{{session('info')}}</strong>
     </div>
     @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>

            <h2 class="h5">Listados de roles</h2>
            {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
              @foreach ($roles as $role)
        <div>
            <label>
                  {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                  {{$role->name}}
            </label>
        </div>
              @endforeach

              {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop