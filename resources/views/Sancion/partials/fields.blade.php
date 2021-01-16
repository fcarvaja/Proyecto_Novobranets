<div class="form-group">
{!! Form::label('gestion_academica', 'Gestion Academica', ['for' => 'gestion_academica'] ) !!}
{!! Form::text('gestion_academica', null , ['class' => 'form-control', 'id' => 'gestion_academica', 'placeholder' => 'Escriba una nueva Gestion Academica' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion'] ) !!}
    {!! Form::text('descripcion', null , ['class' => 'form-control', 'id' => 'descripcion', 'placeholder' => 'Escribe una Descripcion' ]  ) !!}
</div>

<div class="form-group">
{!! Form::label('formulario', 'Formulario', ['for' => 'formulario'] ) !!}
{!! Form::text('formulario', null , ['class' => 'form-control', 'id' => 'formulario', 'placeholder' => 'Escriba el link de un nuevo Formulario' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email', ['for' => 'email'] ) !!}
    {!! Form::text('email', null , ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Escriba el Email de contacto' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('fono', 'Fono', ['for' => 'fono'] ) !!}
    {!! Form::text('fono', null , ['class' => 'form-control', 'id' => 'fono', 'placeholder' => 'Escriba el Fono de contacto' ]  ) !!}
</div>