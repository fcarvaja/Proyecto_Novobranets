@extends('layouts.app')
@section('content')

<!--Pagina principal del administrador, aqui estan los botones que llevan a los contenedores de cada controllador-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tareas del Administrador</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->isAdmin())
                        <div>Acceso como administrador</div>
                    @endif

                </div> <!--Botones de la pagina -->
                    <div class="card-body">
                        <a class="btn btn-success pull-right" href="{{ url('cursos') }}" role="button">Gestionar a Cursos</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('alumnos') }}" role="button">Gestionar a Alumnos</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('profesores') }}" role="button">Gestionar a Profesores</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('actividades') }}" role="button">Gestionar a Actividades</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('tipoActividades') }}" role="button">Gestionar a Tipos de Actividades</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('estadoActividades') }}" role="button">Gestionar a EstadoActividades</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('facultads') }}" role="button">Gestionar a Facultad</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('escuelas') }}" role="button">Gestionar a Escuela</a>
                        <br />
                        <br />
                        <a class="btn btn-success pull-right" href="{{ url('sancions') }}" role="button">Gestionar a Sancion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
