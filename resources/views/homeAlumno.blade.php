@extends('layouts.app')
@section('content')

<!--Pagina principal, donde se hubican los botones que llevan a las direferentes acciones de la pagina web-->
<!DOCTYPE html>
<html>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> <!--Boton de perfil de la parte superior izquierda-->
                <a class="btn btn-success" href="{{ url('perfil') }}" role="button">Perfil</a>
            </div>
        </div>
        <div class="text-md-center"> <!--Imagen en la pantalla-->
            <div class="">
                <img alt="solvetic" src="https://resourcepot.com/images/uploads/scholarship.png" class="img-thumbnail" /><br><br>
            </div>
        </div>
        <div class="row"> <!--Botones del menu principal-->
            <div class="col-md-3">
                <a class="btn btn-success btn-block" href="{{ url('actividads') }}" role="button">Planificacion</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-success btn-block" href="{{ url('') }}" role="button">Administrar cursos</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-success btn-block" href="{{ url('sanciones') }}" role="button">Articulos y sanciones academicas</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-success btn-block" href="{{ url('mapasMenu') }}" role="button">Informacion Escuelas</a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
