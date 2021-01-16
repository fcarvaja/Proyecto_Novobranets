@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'profesores.store', 'method' => 'POST']) !!}
        @include('Profesor.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection