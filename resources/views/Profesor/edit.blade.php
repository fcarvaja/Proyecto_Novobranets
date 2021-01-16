@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Profesor: {{ $profesores->rut }}</h4>
    {!! Form::model($profesores, [ 'route' => ['profesores.update', $profesores], 'method' => 'PUT']) !!}
        @include('Profesor.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection