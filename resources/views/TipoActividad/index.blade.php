@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/tipoActividades/create') }}" role="button">Nuevo Tipo Actividad</a>
    @include('TipoActividad.partials.table')
@endsection