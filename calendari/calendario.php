<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendario</title>
		<style>
			b {color: red;}
			td {background: #FFD100;}
			th {text-align: center;}
		</style>
</head>
<body>
<table>
	<tr>
		<th colspan="7">Octubre</th>
	</tr>
	<tr>
		<td>Lunes</td>
		<td>Martes</td>
		<td>Miércoles</td>
		<td>Jueves</td>
		<td>Viernes</td>
		<td>Sábado</td>
		<td>Domingo</td>
	</tr>
	<?php

		#Es el calendario de Octubre
		# Primero hay que definir los valores iniciales del calendario
		$numdia = 1;
		$month=date("n");
		$year=date("Y");
		$day = date("d");
		$numtotalmes = date("d",(mktime(0,0,0,$month+1,1,$year)-1));

		# Obtenemos el primer dia de la semana
		$diaSemana=date("w",mktime(0,0,0,$month,1,$year));

		# Devuelve 0 para domingo, 6 para sabado
		//$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
		
		# Obtenemos el ultimo dia del mes
		//$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));

		$primerdia = 1;

		# Son 6 columnas de 7 dias

		for ($i=0; $i < 6; $i++) { #6 semanas del mes de octubre 
			echo "<tr >";
		
			for ($y=0; $y  < 7; $y++) { #7 días de la semana
				if ($primerdia != $diaSemana) { #de esta manera colocaremos los días, el primer día
					$primerdia = $primerdia + 1;
					echo "<td>	</td>"; #Colocamos los vacíos que hay del Lunes al Sábado
				} 
				else 
				{
					if ($numdia == $day) 
					{
					echo "<td><b><i>".$numdia."</i></b></td>";
					} 
					else {
					echo "<td>".$numdia."</td>";
		}

		$numdia= $numdia +1;
		}
		if ($numdia == $numtotalmes+1) {
			$i = 6;
			$y = 8;
		}
			}
			echo "</tr>";
		}
		
	?>

</table>
</body>
</html>