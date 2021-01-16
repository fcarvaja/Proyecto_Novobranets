@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Sancion: {{ $sancions->gestion_academica }}</h4>
    {!! Form::model($sancions, [ 'route' => ['sancions.update', $sancions], 'method' => 'PUT']) !!}
        @include('Sancion.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection