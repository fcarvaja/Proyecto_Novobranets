<div class="form-group">
{!! Form::label('titulo', 'Titulo', ['for' => 'titulo'] ) !!}
{!! Form::text('titulo', null , ['class' => 'form-control', 'id' => 'titulo', 'placeholder' => 'Escriba el nuevo Titulo' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion'] ) !!}
    {!! Form::text('descripcion', null , ['class' => 'form-control', 'id' => 'descripcion', 'placeholder' => 'Escribe la nueva descripcion' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha_termino', 'Fecha de termino (YYYY-MM-DD)', ['for' => 'fecha_termino'] ) !!}
    {!! Form::text('fecha_termino', null , ['class' => 'form-control', 'id' => 'fecha_termino', 'placeholder' => 'Escribe la fecha de termino' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('estadoActividad_id', 'Estado de la Actividad', ['for' => 'estadoActividad_id'] ) !!}
    <select name="estadoActividad_id" id="estadoActividad_id" class="form-control" value="estadoActividad_id">

        @foreach($estadoActividades as $estadoActividad)
            <option value="{{$estadoActividad['id']}}" @if($estadoActividad=='$estadoActividad["id"]')selected @endif >{{$estadoActividad['nombre']}}</option>
        @endforeach

    </select>
</div>

<div class="form-group">
    {!! Form::label('tipoActividad_id', 'Tipo de actividad', ['for' => 'tipoActividad_id'] ) !!}
    <select name="tipoActividad_id" id="tipoActividad_id" class="form-control" value="tipoActividad_id">

        @foreach($tipoActividades as $tipoActividad)
            <option value="{{$tipoActividad['id']}}" @if($tipoActividad=='$tipoActividad["id"]')selected @endif >{{$tipoActividad['nombre']}}</option>
        @endforeach

    </select>
</div>

<div class="form-group">
    {!! Form::label('alumno_id', 'Actividad de cual alumno', ['for' => 'alumno_id'] ) !!}
    <select name="alumno_id" id="alumno_id" class="form-control" value="alumno_id">

        @foreach($alumnos as $alumno)
            <option value="{{$alumno['id']}}" @if($alumno=='$alumno["id"]')selected @endif >{{$alumno['nombres']}}</option>
        @endforeach

    </select>
</div>


