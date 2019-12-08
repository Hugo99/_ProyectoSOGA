<!DOCTYPE html>
<html>
<title>Reporte</title>
<head>
	<style>
		table{
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		td, th{
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){
			background-color: #dddddd;
		}
		h1{
			font-size: 300%;
		}
		h2{
			font-size: 250%;
		}
		h3{
			font-size: 200%;
		}
		.center-embed {
        	display: block;
        	margin: auto;
    	}
	</style>
</head>
<body>
	<div style="margin-left:40%; margin-top:1%;"
		<p>
			<img src="Archivos/logo_unison.png" alt="my picture" height=15 width=15 style="float: right;">
			-Proyecto SOGA-
		</p>
	</div>
			<hr/>
		<div style="margin-top: 10%;">
        <h1 style="text-align:center"> Actividad: {{$actividad->nombre}} </h1>
        </div>
        <div style="margin-top: 10%;">
        <h3 style="text-align:center">Descripción: {{ $actividad->descripcion }}</h3>
    	</div>
        <div style="margin-top: 15%;">

        </div>
        <div style="margin-top: 15%;">

    	</div>
			<hr/>
</body>
</html>
