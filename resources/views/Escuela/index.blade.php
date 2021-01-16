@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/escuelas/create') }}" role="button">Nueva Escuela</a>
    @include('Escuela.partials.table')
@endsection