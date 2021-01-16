@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Alumno: {{ $alumnos->rut }}</h4>
    {!! Form::model($alumnos, [ 'route' => ['alumnos.update', $alumnos], 'method' => 'PUT']) !!}
        @include('Alumno.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection