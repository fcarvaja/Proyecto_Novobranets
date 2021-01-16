@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="es-CL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Novobranets</title>
</head>

<body>
    <div class="container-fluid"><!--Zona titulo-->
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ url('/alumno') }}" role="button">Menu Principal</a> <!--Boton para ir al menu-->
                <h1 class="text-md-center" >Facultades Pucv</h1>

            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid"> <!--Opciones-->
        <div class="form-group">
            <p><span class="container">Elija una Facultad :</span>
            <form action = "facultadsM" method="POST" role="form"> <!--Formulario para seleccionar la Facultad-->
            <?php $i = 0; ?> <!--Para guardar la opcion-->
            {{ csrf_field() }} <!--Sirve para validar el formulario, sin esto la pagina no anda-->

                <select name="opcion" id="facultad_id" class="form-control" value="facultad_id" action="FacultadController@indexMapa">
                    @foreach($facultads as $facultad)
                        <option value={{$i}} @if($facultad == '$facultad["id"]')selected @endif>
                            {{$facultad['nombre_edificio']}}
                        </option>
                        <?php $i++; ?>
                    @endforeach
                </select>
                <br>
                <input class="btn btn-primary" type="submit" name="btnAceptar" id="btnAceptar" value="Aceptar" />
            </form>
        </div>
    </div>

</body>
</html>
@endsection