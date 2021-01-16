@extends('layouts.layout')

@section('content')
    {!! Form::open([ 'route' => 'facultads.store', 'method' => 'POST']) !!}
        @include('Facultad.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection