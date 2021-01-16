@extends('layouts.layout')

@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <a class="btn btn-success pull-right" href="{{ url('/sancions/create') }}" role="button">Nueva Sancion</a>
                    <div class="pull-left"><h3>Lista Sanciones</h3></div>
                    <div class="table-container">
                        <table class="table table-bordered" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Gestion Academica</th>
                                    <th class="text-center">Descripcion</th>
                                    <th class="text-center">Formulario</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Fono</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sancions as $sancion)
                                    <tr>
                                        <td class="text-center">{{ $sancion->id }}</td>
                                        <td class="text-center">{{ $sancion->gestion_academica }}</td>
                                        <td class="text-center">{{ $sancion->descripcion }}</td>
                                        <td class="text-center">{{ $sancion->formulario }}</td>
                                        <td class="text-center">{{ $sancion->email }}</td>
                                        <td class="text-center">{{ $sancion->fono }}</td>
                                        <td class="text-center">{{ $sancion->created_at }}</td>

                                    {!! Form::open(['route' => ['sancions.destroy', $sancion->id], 'method' => 'DELETE']) !!}

                                        <td class="text-center">
                                            <button type="submit" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                            <a href="{{ url('/sancions/'.$sancion->id.'/edit') }}" class="btn btn-info btn-xs">
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
