@extends('layouts.layout')

@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="btn btn-success pull-right" href="{{ url('/actividades/create') }}" role="button">Nueva Actividad</a>
                    <div class="pull-left"><h3>Lista Actividades</h3></div>
                        <div class="table-container">
                            <table class="table table-bordered" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Titulo</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Fecha termino</th>
                                        <th class="text-center">Fecha de creación</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($actividades as $actividad)
                                        <tr>
                                            <td class="text-center">{{ $actividad->id }}</td>
                                            <td class="text-center">{{ $actividad->titulo }}</td>
                                            <td class="text-center">{{ $actividad->descripcion }}</td>
                                            <td class="text-center">{{ $actividad->fecha_termino }}</td>
                                            <td class="text-center">{{ $actividad->created_at }}</td>

                                        {!! Form::open(['route' => ['actividades.destroy', $actividad->id], 'method' => 'DELETE']) !!}

                                            <td class="text-center">
                                                <button type="submit" class="btn btn-danger btn-xs">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </button>
                                                <a href="{{ url('/actividades/'.$actividad->id.'/edit') }}" class="btn btn-info btn-xs">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </a>
                                            </td>

                                        {!! Form::close() !!}

                                        </tr>
                                    @endforeach
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Descripcion</th>
                                    <th class="text-center">Fecha termino</th>
                                    <th class="text-center">Fecha de creación</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                            </table>
                            <a class="btn btn-success pull-left" href="{{ url('admin') }}" role="button">Regresar a home</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection
