<?php
// creo un array amb 3 elements
$a = array( 5,7,11);
print_r( $a );
echo "<br>";

//afegeixo més elements a l'array
$a[] = 13;  
$a[] = 17;

echo "Com puc fer per afegir un element a 
l'array a partir de la darrera posició coneguda? 
Esmenta dues maneres diferents. 
- Una de ellas es esta y la otra es: ";
array_push($a, 45);

print_r( $a );
echo "<br>";

//encara un altre
array_push ($a, 23);
print_r( $a );
echo "<br>";

//pinto elements de l'array
echo "El valor de del terce element de l'array és " . $a[2];
echo "<br>";

unset($a[0]); //así se borran las posiciones
unset($a[1]); // el valor 7 seguia a la possició 1
print_r( $a );
echo "<br>";

echo "\n";
$variable = gettype( $a );
echo "Si li prenem el tipus a l'array amb la funció gettype(), quin tipus obtenim?, el tipus es: ";
echo $variable;

//acedir a un array
$array[1]=3;
?>
