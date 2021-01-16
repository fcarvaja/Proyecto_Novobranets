@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/sancions/create') }}" role="button">Nueva Sancion</a>
    @include('Sancion.partials.table')
@endsection