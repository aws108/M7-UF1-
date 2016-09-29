<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";

echo "\n";
   
echo "La classe de l'objecte es: " ;
echo  $classe_de_d = get_class( $d );
?>


