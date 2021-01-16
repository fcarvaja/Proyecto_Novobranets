@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'sancions.store', 'method' => 'POST']) !!}
        @include('Sancion.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection