<div class="form-group">
{!! Form::label('nombre_escuela', 'Nombre Escuela', ['for' => 'nombre_escuela'] ) !!}
{!! Form::text('nombre_escuela', null , ['class' => 'form-control', 'id' => 'nombre_escuela', 'placeholder' => 'Escriba el nombre de la facultad' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('facultad_id', 'Facultad a asociar', ['for' => 'facultad_id'] ) !!}
    <select name="facultad_id" id="facultad_id" class="form-control" value="facultad_id">

        @foreach($facultads as $facultad)
            <option value="{{$facultad['id']}}" @if($facultad=='$facultad["id"]')selected @endif >{{$facultad['nombre_facultad']}}</option>
        @endforeach

    </select>
</div>
