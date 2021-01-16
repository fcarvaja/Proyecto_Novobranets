

@if(Auth::user()->type == 'admin')
<div class="form-group">
{!! Form::label('rut', 'Rut', ['for' => 'rut'] ) !!}
{!! Form::text('rut', null , ['class' => 'form-control', 'id' => 'rut', 'placeholder' => 'Escriba el nuevo rut' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombres', 'Nombres', ['for' => 'nombres'] ) !!}
    {!! Form::text('nombres', null , ['class' => 'form-control', 'id' => 'nombres', 'placeholder' => 'Escribe los nuevos nombres' ]  ) !!}
</div>

<div class="form-group">
{!! Form::label('apellidos', 'Apellidos', ['for' => 'apellidos'] ) !!}
{!! Form::text('apellidos', null , ['class' => 'form-control', 'id' => 'apellidos', 'placeholder' => 'Escriba los apellidos' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('creditos_aprobados', 'Creditos aprobados', ['for' => 'creditos_aprobados'] ) !!}
    {!! Form::text('creditos_aprobados', null , ['class' => 'form-control', 'id' => 'creditos_aprobados', 'placeholder' => 'Escriba los creditos aprobados' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Correo electronico', ['for' => 'email'] ) !!}
    {!! Form::text('email', null , ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Escriba el correo electronico' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('user_id', 'Usuario a asociar', ['for' => 'user_id'] ) !!}
    <select name="user_id" id="user_id" class="form-control" value="user_id">

        @foreach($usuarios as $usuario)
            <option value="{{$usuario['id']}}" @if($usuario=='$usuario["id"]')selected @endif >{{$usuario['name']}}</option>
        @endforeach

    </select>
</div>
@endif

@if(Auth::user()->type == 'alumno')

    <div class="form-group">
        {!! Form::label('nombres', 'Nombres', ['for' => 'nombres'] ) !!}
        {!! Form::text('nombres', null , ['class' => 'form-control', 'id' => 'nombres', 'placeholder' => 'Escribe los nuevos nombres' ]  ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('apellidos', 'Apellidos', ['for' => 'apellidos'] ) !!}
        {!! Form::text('apellidos', null , ['class' => 'form-control', 'id' => 'apellidos', 'placeholder' => 'Escriba los apellidos' ]  ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo electronico', ['for' => 'email'] ) !!}
        {!! Form::text('email', null , ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Escriba el correo electronico' ]  ) !!}
    </div>


@endif