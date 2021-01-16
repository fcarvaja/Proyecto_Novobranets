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
                <a class="btn btn-primary" href="{{ url('/mapasMenu') }}" role="button">Atras</a>
                <h1 class="text-md-center" >Información Escuela</h1>
            </div>
        </div>
        <hr>
        <div class="row"> <!--Segundo bloque-->
            <div class="col-md-6"><!--Lado izquiero del primer bloque-->
                <u> <h2 class="titular-carrera" style="text-transform: uppercase;">{{$facultads[$opcion]->nombre_facultad}}</h2> </u>
                        <p><span> - Decano(a):</span><br>{{ $facultads[$opcion]->decano }}
                        <p><span> - Vicedecano(a):</span><br>{{ $facultads[$opcion]->vicedecano }}
                        <p><span> - Secretario(a) de Facultad:</span><br>{{$facultads[$opcion]->secretario_facultad}}
            </div>
            <div class="col-md-6"> <!--Imagen lado derecho de la pagina-->
                <img class="img-thumbnail" height="300" width="400" alt="FACULTAD DE INGENIERÍA" title="FACULTAD DE INGENIERÍA" src="{{$facultads[$opcion]->imagen_edificio}}">
            </div>
        </div>

        <div class="row"> <!--Tercer bloque-->
            <div class="col-md-6">
                <br>
                    <div class="col1 aleft">
                        <h3>Edificio {{$facultads[$opcion]->nombre_edificio}}</h3> <!--Datos del edificio-->
                            @foreach($escuelas as $escuela) <!--Recorremos las escuelas-->
                                @if( $escuela->facultad_id == $facultads[$opcion]->id ) <!-- Para mostrar las escuelas que pose la facultad -->
                                    -{{$escuela->nombre_escuela}}<br>
                                @endif
                            @endforeach
                        <p><span>Fono : {{$facultads[$opcion]->fono_edificio}}</span><br>
                        <span>Direccion :  {{$facultads[$opcion]->direccion_edificio}}</span>
                    </div>
                    <div class="col1 aleft"><br>
                        <h3>{{$facultads[$opcion]->contacto_facultad}}</h3> <!--Datos del contacto del edificio-->
                        <span><a>Fono: {{$facultads[$opcion]->fono_contacto}}</a></span><br>
                        <span>Fax: {{$facultads[$opcion]->fax_contacto}}</span><br>
                        <span>E-mail: {{$facultads[$opcion]->email_contacto}}</span>
                    </div>

            </div>
            <div class="col-md-6"> <!--Mapa de la facultad-->
                <br>
                <iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox={{$facultads[$opcion]->longitud_mapa}}%2C{{$facultads[$opcion]->latitud_mapa}}%2C{{$facultads[$opcion]->longitud_mapa}}%2C{{$facultads[$opcion]->latitud_mapa}}&amp;layer=mapnik&amp;marker={{$facultads[$opcion]->latitud_mapa}}%2C{{$facultads[$opcion]->longitud_mapa}}" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=-33.04453&amp;mlon=-71.61255#map=18/-33.04453/-71.61255&amp;layers=N">Ver mapa más grande</a></small>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

