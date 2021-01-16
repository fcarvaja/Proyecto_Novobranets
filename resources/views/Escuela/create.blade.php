@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'escuelas.store', 'method' => 'POST']) !!}
        @include('Escuela.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection