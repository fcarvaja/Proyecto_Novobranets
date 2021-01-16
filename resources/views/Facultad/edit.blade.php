@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Facultad: {{ $facultads->nombre_facultad }}</h4>
    {!! Form::model($facultads, [ 'route' => ['facultads.update', $facultads], 'method' => 'PUT']) !!}
        @include('Facultad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection