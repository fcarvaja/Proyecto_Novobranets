@extends('layouts.layout')

@section('content')
    <a class="btn btn-success pull-right" href="{{ url('/cursos/create') }}" role="button">Nuevo Alumno</a>
    @include('Alumno.partials.table')
@endsection