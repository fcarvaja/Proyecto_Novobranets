@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading">Event Calendar in Laravel 5 Using Laravel-fullcalendar</div>

            <div class="panel-body">

                {!! Form::open(array('route' => 'actividads.add','method'=>'POST','files'=>'true')) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @elseif (Session::has('warnning'))
                            <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                        @endif

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('titulo','Nombre Actividad:') !!}
                            <div class="">
                                {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('titulo', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            {!! Form::label('fecha_inicio','Fecha de Inicio:') !!}
                            <div class="">
                                {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('fecha_inicio', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            {!! Form::label('fecha_termino','Fecha de termino:') !!}
                            <div class="">
                                {!! Form::date('fecha_termino', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('fecha_termino', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                        {!! Form::submit('Agregar actividad',['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>

        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">MY Event Details</div>
            <div class="panel-body" >
                {!! $calendar_details->calendar() !!}
            </div>
        </div>

    </div>
@endsection