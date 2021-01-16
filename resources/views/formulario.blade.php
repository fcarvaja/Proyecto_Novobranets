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
    <div class="container-fluid"><!--Primer bloque-->
        <div class="row"> <!--Titulo de la pagina-->
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ url('/sanciones') }}" role="button">Atras</a>
                <h1 class="text-md-center" >Formularios: Sanciones Académicas</h1>
            </div>
        </div>
        <hr>
    </div>
    @foreach($sancions as $sancion) <!--Recorremos las sanciones-->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div  class="col-md-3 table-bordered"> <!--Primera seccion-->
                {{$sancion->gestion_academica}}<br>
            </div>

            <div class="col-md-3 table-bordered"><!--segunda seccion-->
                {{$sancion->descripcion}}<br>
            </div>

            <div class="col-md-3 table-bordered"><!--tercera seccion-->
                <a target="_blank" href="{{$sancion->formulario}}" class="btn-outline-danger">Formulario</a>
            </div>

            <div class="col-md-3 table-bordered "><!--cuarta seccion-->
                {{$sancion->email}}<br>
                {{$sancion->fono}}<br>
            </div>
            <hr>
        </div>

    </div>
    @endforeach
</body>
</html>
@endsection



