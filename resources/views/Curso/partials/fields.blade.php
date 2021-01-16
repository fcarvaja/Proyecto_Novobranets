<div class="form-group">
{!! Form::label('sigla', 'Sigla', ['for' => 'sigla'] ) !!}
{!! Form::text('sigla', null , ['class' => 'form-control', 'id' => 'sigla', 'placeholder' => 'Escriba la nueva Sigla' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('nombre', null , ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Escribe el nuevo nombre' ]  ) !!}
</div>

<div class="form-group">
{!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion'] ) !!}
{!! Form::text('descripcion', null , ['class' => 'form-control', 'id' => 'descripcion', 'placeholder' => 'Escriba la nueva descripcion' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('creditos', 'Creditos', ['for' => 'creditos'] ) !!}
    {!! Form::text('creditos', null , ['class' => 'form-control', 'id' => 'creditos', 'placeholder' => 'Escriba la cantidad de creditos' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('profesor_id', 'Profesor del curso', ['for' => 'profesor_id'] ) !!}
    <select name="profesor_id" id="profesor_id" class="form-control" value="profesor_id">

        @foreach($profesores as $profesor)
            <option value="{{$profesor['id']}}" @if($profesor=='$profesor["id"]')selected @endif >{{$profesor['nombres']}}</option>
        @endforeach

    </select>
</div>
