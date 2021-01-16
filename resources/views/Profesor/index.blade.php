@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/profesores/create') }}" role="button">Nuevo Profesor</a>
    @include('Profesor.partials.table')
@endsection