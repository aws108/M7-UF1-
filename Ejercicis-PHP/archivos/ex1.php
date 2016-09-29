<?php
$i = 12;
$e = 12.3;
$b = true;
$c = "hola";
$tipus_de_i = gettype( $i );
$tipus_de_e = gettype( $e );
$tipus_de_b = gettype( $b );
$tipus_de_c = gettype( $c );

$variable = gettype( $tipus_de_i );

echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i";
      
echo "La variable \$e 
      conté el valor $e 
      e és del tipus $tipus_de_e";
      
echo "La variable \$b 
      conté el valor $b
      b és del tipus $tipus_de_b";
      
echo "La variable \$c 
      conté el valor $c 
      c és del tipus $tipus_de_c";
      
echo "Variable $variable";
?>


