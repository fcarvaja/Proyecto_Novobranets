@extends('layouts.layout')

@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <a class="btn btn-success pull-right" href="{{ url('/facultads/create') }}" role="button">Nueva Facultad</a>
                    <div class="table-active"><h3>Lista de Facultades</h3></div>
                    <div class="table-container">
                        <table class="table table-bordered" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nombre Facultad</th>
                                    <th class="text-center">Decano</th>
                                    <th class="text-center">Vicedecano</th>
                                    <th class="text-center">Secretario Facultad</th>
                                    <th class="text-center">Nombre Edificio</th>
                                    <th class="text-center">Fono Edificio</th>
                                    <th class="text-center">Direccion Edificio</th>
                                    <th class="text-center">Contacto Facultad</th>
                                    <th class="text-center">Fono Contacto</th>
                                    <th class="text-center">Fax Contacto</th>
                                    <th class="text-center">Email Contacto</th>
                                    <th class="text-center">Imagen Edificio</th>
                                    <th class="text-center">Latitud Mapa</th>
                                    <th class="text-center">Longitud Mapa</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($facultads as $facultad)
                                    <tr>
                                        <td class="text-center">{{ $facultad->id }}</td>
                                        <td class="text-center">{{ $facultad->nombre_facultad }}</td>
                                        <td class="text-center">{{ $facultad->decano }}</td>
                                        <td class="text-center">{{ $facultad->vicedecano }}</td>
                                        <td class="text-center">{{ $facultad->secretario_facultad }}</td>
                                        <td class="text-center">{{ $facultad->nombre_edificio }}</td>
                                        <td class="text-center">{{ $facultad->fono_edificio }}</td>
                                        <td class="text-center">{{ $facultad->direccion_edificio }}</td>
                                        <td class="text-center">{{ $facultad->contacto_facultad }}</td>
                                        <td class="text-center">{{ $facultad->fono_contacto }}</td>
                                        <td class="text-center">{{ $facultad->fax_contacto }}</td>
                                        <td class="text-center">{{ $facultad->email_contacto }}</td>
                                        <td class="text-center">{{ $facultad->imagen_edificio }}</td>
                                        <td class="text-center">{{ $facultad->latitud_mapa }}</td>
                                        <td class="text-center">{{ $facultad->longitud_mapa }}</td>
                                        <td class="text-center">{{ $facultad->created_at }}</td>

                                    {!! Form::open(['route' => ['facultads.destroy', $facultad->id], 'method' => 'DELETE']) !!}

                                        <td class="text-center">
                                            <button type="submit" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                            <a href="{{ url('/facultads/'.$facultad->id.'/edit') }}" class="btn btn-info btn-xs">
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
