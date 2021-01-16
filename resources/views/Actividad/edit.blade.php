@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Actividad: {{ $actividades->titulo }}</h4>
    {!! Form::model($actividades, [ 'route' => ['actividades.update', $actividades], 'method' => 'PUT']) !!}
        @include('Actividad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection