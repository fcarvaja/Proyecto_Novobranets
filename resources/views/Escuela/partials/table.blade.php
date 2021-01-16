@extends('layouts.layout')

@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="btn btn-success pull-right" href="{{ url('/escuelas/create') }}" role="button">Nueva Escuela</a>
                    <div class="pull-left"><h3>Lista de Escuelas</h3></div>
                        <div class="table-container">
                            <table class="table table-bordered" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Nombre Escuela</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($escuelas as $escuela)
                                        <tr>
                                            <td class="text-center">{{ $escuela->id }}</td>
                                            <td class="text-center">{{ $escuela->nombre_escuela }}</td>
                                            <td class="text-center">{{ $escuela->created_at }}</td>

                                        {!! Form::open(['route' => ['escuelas.destroy', $escuela->id], 'method' => 'DELETE']) !!}

                                            <td class="text-center">
                                                <button type="submit" class="btn btn-danger btn-xs">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </button>
                                                <a href="{{ url('/escuelas/'.$escuela->id.'/edit') }}" class="btn btn-info btn-xs">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </a>
                                            </td>

                                        {!! Form::close() !!}

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-success pull-left" href="{{ url('admin') }}" role="button">Regresar a home</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection
