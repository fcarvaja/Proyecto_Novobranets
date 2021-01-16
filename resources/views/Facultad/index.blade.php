@extends('layouts.layout')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/facultads/create') }}" role="button">Nueva Facultad</a>
    @include('Facultad.partials.table')
@endsection