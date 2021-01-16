@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Tipo Actividad: {{ $tipoActividades->nombre }}</h4>
    {!! Form::model($tipoActividades, [ 'route' => ['tipoActividades.update', $tipoActividades], 'method' => 'PUT']) !!}
        @include('TipoActividad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection