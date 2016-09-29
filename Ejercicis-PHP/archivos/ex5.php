<?php
$a = array( 1,1,2,3,5,8,13);
foreach( $a as $v ) { //$v recoge todos los valores de $a
    echo $v . " "; //El punto concatena el valor de la variable con un string vacío
}
?>

<?php
$a = array( 1,1,2,3,5,8,13);
for( $i = 0; $i < count( $a ); $i++ ) {
    echo $a[$i] . " ";
}
?>
