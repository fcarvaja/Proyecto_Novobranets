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
<div class="container-fluid">
	<div class="row"> <!--Primer bloque-->
		<div class="col-md-12">
			<a class="btn btn-success" href="{{ url('/alumno') }}" role="button">Menu Principal</a>
			<h1 class="text-center">Sanciones Académicas</h1>
			<hr/>
			<p>En el presente apartado puedes ver toda la información respecto a las sanciones académicas de nuestra Escuela, así como tambien información y consejos de cómo liberarte de estas si es que en algún momento te ves afectado por alguna.</p>
		</div>
	</div>

	<div class="row"><!--Segundo bloque-->
		<div class="col-md-12">
			<h3 class="text-left">Artículo 28 - Insuficiente Avance Curricular (Déficit de Créditos)</h3>
			<hr/>
			<p>
				<strong>¿Qué es?:</strong><br/>Ocurre cuando no se cumple con el mínimo acumulado de créditos aprobados por semestres cursados de acuerdo al plan de estudios.
			</p>
			<p>
				<strong>¿Qué hacer?:</strong><br/>La liberación de esta sanción se solicita directamente en la Dirección de Procesos Docentes, previa presentación de un formulario el cual debe venir firmado y timbrado por el Jefe de Docencia de la Unidad Académica.
			</p>
		</div>
	</div>

	<div class="row"><!--Tercer bloque-->
		<div class="col-md-12">
			<h3 class="text-left">Artículo 33 - Reprobación Reiterada</h3>
			<hr/>
			<p>
				<strong>¿Qué es?:</strong><br/>Se produce cuando un alumno reprueba por segunda vez una misma asignatura.
			</p>

			<p>
				<strong>¿Qué hacer?:</strong><br/> - <strong>Nueva (Tercera) oportunidad para cursar asignaturas:</strong> La solicitud para cursar nuevamente asignaturas reprobadas en oportunidades se presenta en la Unidad Académica, si es rechazada puede apelarse ante el Decano y si éste la rechaza queda la opción del "Tribunal de Mérito".
			</p>
		</div>
	</div>

	<div class="row"><!--Cuarto bloque-->
		<div class="col-md-12">
			<h3 class="text-left">Artículo 45 - Separación del Currículo</h3>
			<hr/>
			<p>
				<strong>¿Qué es?:</strong><br/>	Se produce cuando no se aprueba asignaturas obligatorias en el año de  ingreso a la carrera.  Si por cualquier motivo no se diese cumplimiento a esta disposición, el alumno quedará separado de la Universidad, sin perjuicio de su ingreso a ella a través del procedimiento general de postulación.<br/>
				Con todo, si por razones de fuerza mayor, un alumno de primer año no pudiese cumplir con lo previsto anteriormente, el Director de Procesos Docentes podrá, excepcionalmente y ante la solicitud fundada del interesado, autorizar su permanencia en el currículo pertinente (reserva de vacante).
			</p>
		</div>
	</div>

	<div class="row"><!--Quinto bloque-->
		<div class="col-md-12">
			<a class="btn btn-outline-primary btn-block" href="{{ url('/sancionsF') }}" role="button">Formularios: Sanciones Académicas</a>
		</div>
	</div>
</div>
</body>
</html>
@endsection