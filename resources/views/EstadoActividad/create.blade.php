@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'estadoActividades.store', 'method' => 'POST']) !!}
        @include('EstadoActividad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection