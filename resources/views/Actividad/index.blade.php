@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/actividades/create') }}" role="button">Nueva Actividad</a>
    @include('Actividad.partials.table')
@endsection