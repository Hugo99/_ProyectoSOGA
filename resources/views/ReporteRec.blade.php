<!DOCTYPE html>
<html>
<title>Portada Recomendaciones</title>
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
		textarea{
		border-width:0;
		font-size: 200%;
		font-family: arial, sans-serif;
}

		h1{
			font-size: 300%;
		}
		h2{
			font-size: 250%;
		}
		h3{
			font-size: 50%;
		}
        img{
            width: 5%;
            height: 5%;
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
			<img src="Archivos/logo_unison.png" alt="my picture" height=50 width=100 style="float: right;">
			-Proyecto SOGA-
		</p>
	</div>
			<hr/>
		<div style="margin-top: 10%;">
            <h1 style="text-align:center"> Recomendación:<br> <br> <br> <br> {{$recomendaciones->recomendacion}} </h1>
        </div>
        <div style="margin-top: 5%;">
					<textarea name="text" >
			<center>			Descripción: </center>
			<center>			{{ $recomendaciones->descripcion }}  </center>
					</textarea>
    	</div>
</body>
</html>
