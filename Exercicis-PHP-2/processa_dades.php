//El codi per a pintar camp a camp les dades rebudes

<?php

//Bucle que retorna les dades del formulari
foreach ($_REQUEST as $clau => $valor){
	
	echo "Clau: $clau <br/>";
	
	$es_array=(gettype ($valor) == "array");
	
	if($es_array){
		echo "Valor(s): ";
		//Bucle intern. Se recorre un array
		foreach ($valor as $v){
			echo "$v, ";
		}
	}
	else {
		echo "Valor: $valor";
		}
	echo "<br/>";
	echo "<br/>";
	
	}
?>
	
