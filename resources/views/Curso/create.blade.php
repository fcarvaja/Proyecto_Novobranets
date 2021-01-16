@extends('layouts.layout')
@section('content')
    {!! Form::open([ 'route' => 'cursos.store', 'method' => 'POST']) !!}
        @include('Curso.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection