<div class="form-group">
{!! Form::label('rut', 'Rut', ['for' => 'rut'] ) !!}
{!! Form::text('rut', null , ['class' => 'form-control', 'id' => 'rut', 'placeholder' => 'Escriba el nuevo rut' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombres', 'Nombres', ['for' => 'nombres'] ) !!}
    {!! Form::text('nombres', null , ['class' => 'form-control', 'id' => 'nombres', 'placeholder' => 'Escribe los nuevos nombres' ]  ) !!}
</div>

<div class="form-group">
{!! Form::label('apellidos', 'Apellidos', ['for' => 'apellido_paterno'] ) !!}
{!! Form::text('apellidos', null , ['class' => 'form-control', 'id' => 'apellidos', 'placeholder' => 'Escriba los Apellidos' ]  ) !!}
</div>