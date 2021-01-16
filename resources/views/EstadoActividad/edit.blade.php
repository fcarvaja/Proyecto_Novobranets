@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Estado Actividad: {{ $estadoActividades->nombre }}</h4>
    {!! Form::model($estadoActividades, [ 'route' => ['estadoActividades.update', $estadoActividades], 'method' => 'PUT']) !!}
        @include('EstadoActividad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection