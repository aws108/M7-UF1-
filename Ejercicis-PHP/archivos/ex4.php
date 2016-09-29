//Un array a PHP és realment un mapa ordenat

<?php
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el cáliz de fuego");

//afegim un element més
$m["Aníbal"] = "El caníbal";

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

//Accedim a un element (mostrem només un element)
print( $m["Alibaba"]);
print( "<br>");

//Esborrem un element
//unset destruye una variable especificada
unset( $m["Harry Potter"]);

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

?>

1- Després de l'execució d'aquest codi, quines claus conté l'array?
- Alibaba i Aníbal

2- Quin valor li correspon a cada clau?
- Alibaba: y los cuarenta ladrones
- Aníbal: El canibal

3- Com es fa per afegir un nou parell clau-valor a l'array?
$m["clau"] = "valor";

4- Com es fa per accedir a un valor mitjançant la seva clau?
$m["clau"];

5- Com s'esborra una entrada clau-valor?
unset( $m["valor"]);
