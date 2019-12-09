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
		.center-embed {
        	display: block;
        	margin: auto;
    	}
	</style>
</head>
<body>
    <table style="width:75%" align="right">
      <tbody>
        <?php $a = 1 ?>
        @foreach ($archivos as $archivos)
              <td>
                <img src="Archivos/{{$archivos->archivos}}"  width="150" height="150">
                <?php $a++ ?>
              </td>
              <?php if ($a>5): ?>
                <tr>
                </tr>
                <?php $a=1 ?>
              <?php endif; ?>
        @endforeach
      </tbody>
    </table>
<hr/>
</body>
</html>
