@extends('layouts.app')
@section('content')
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
  <div class="container img-thumbnail">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <body background="uploads/hola.jpg">
          <h3>Ficha Personal Alumno</h3>

          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <form enctype="multipart/form-data" action="/perfil" method="POST">
                    <label for="file-input">
                        <img src="/uploads/avatars/{{ $alumnos->avatar }}" style="width:150px; height:150px; float:left; margin-right:25px;" style="pointer-events: none"/>
                    </label>
                  <input id="file-input" type="file" name="avatar" style="visibility:hidden;">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="pull-right btn btn-sm " style="position: absolute; right: 620px; top: 380px;">Subir imagen</button>
                </form>
              </div>
            </div>
          </div>

          <table class="table left-panel" >
            <tbody>

            <tr class="">
              <td>
                Rut:
              </td>
              <td>
              <td class="">{{ $alumnos->rut }}</td>
              </td>
            </tr>

            <tr class="">
              <td>
                Nombres:
              </td>
              <td>
              <td class="">{{ $alumnos->nombres }}</td>
              </td>
            </tr>

            <tr class="">
              <td>
                Apellidos
              </td>
              <td>
              <td class="">{{ $alumnos->apellidos }}</td>
              </td>
            </tr>

            <tr class="">
              <td>
                Email:
              </td>
              <td>
              <td class="">{{ $alumnos->email }}</td>
              </td>
            </tr>

            </tbody>
          </table>
         </body>

      </div>
    </div>
    <a class="btn btn-primary" href="{{ url('/alumno') }}" role="button">volver</a>
    <a class="btn btn-success pull-right" href="{{ url('/alumnos/'.$alumnos->id.'/edit') }}" role="button">Editar Alumno</a>
  </div>
</body>
<html>
@endsection

