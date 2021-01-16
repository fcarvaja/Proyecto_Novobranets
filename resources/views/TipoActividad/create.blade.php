@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'tipoActividades.store', 'method' => 'POST']) !!}
        @include('TipoActividad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection