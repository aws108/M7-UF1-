<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<meta charset="UTF-8">
</head>

<body>
<table border="3">

  <tr>
    <th colspan="7">Septiembre</th>
  </tr>
    <td>Lunes</td>
    <td>Martes</td>
    <td>Miércoles</td>
    <td>Jueves</td>
    <td>Viernes</td>
    <td>Sábado</td>
    <td>Domingo</td>
  </tr>
  <tr>
	<?php 
	//definimos los valores iniciales para nuestro calendario
	
	$filas=6;
	$columnas=7;

	$month=date("n");
	$year=date("Y");
	$diaActual=date("j");

	$diaSemana=date("w",mktime(0,0,0,$month,9,$year))+7;

	
	?>
  </tr>
  
</table>
	

</body>

</html>