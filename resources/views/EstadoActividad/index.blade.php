@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/estadoActividades/create') }}" role="button">Nuevo Estado Actividad</a>
    @include('EstadoActividad.partials.table')
@endsection