@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'actividades.store', 'method' => 'POST']) !!}
        @include('Actividad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection