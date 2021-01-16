@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'alumnos.store', 'method' => 'POST']) !!}
        @include('Alumno.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection