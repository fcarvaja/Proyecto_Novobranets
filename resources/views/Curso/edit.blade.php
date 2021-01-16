@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Curso: {{ $cursos->nombre }}</h4>
    {!! Form::model($cursos, [ 'route' => ['cursos.update', $cursos], 'method' => 'PUT']) !!}
        @include('Curso.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection