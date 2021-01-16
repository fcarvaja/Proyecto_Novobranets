@extends('layouts.layout')

@section('content')
    <h4 class="text-center">Editar Escuela: {{ $escuelas->nombre_escuela }}</h4>
    {!! Form::model($escuelas, [ 'route' => ['escuelas.update', $escuelas], 'method' => 'PUT']) !!}
        @include('Escuela.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection