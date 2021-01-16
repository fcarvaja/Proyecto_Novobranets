@extends('layouts.layout')

@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <a class="btn btn-success pull-right" href="{{ url('/profesores/create') }}" role="button">Nuevo profesor</a>
                    <div class="pull-left"><h3>Lista profesores</h3></div>
                    <div class="table-container">
                        <table class="table table-bordered" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Rut</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profesores as $profesor)
                                    <tr>
                                        <td class="text-center">{{ $profesor->id }}</td>
                                        <td class="text-center">{{ $profesor->rut }}</td>
                                        <td class="text-center">{{ $profesor->nombres }}</td>
                                        <td class="text-center">{{ $profesor->apellidos }}</td>
                                        <td class="text-center">{{ $profesor->created_at }}</td>

                                    {!! Form::open(['route' => ['profesores.destroy', $profesor->id], 'method' => 'DELETE']) !!}

                                        <td class="text-center">
                                            <button type="submit" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                            <a href="{{ url('/profesores/'.$profesor->id.'/edit') }}" class="btn btn-info btn-xs">
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
                                    <th class="text-center">Rut</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Fecha</th>
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
