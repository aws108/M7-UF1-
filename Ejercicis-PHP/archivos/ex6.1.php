Fes un array on les claus siguin noms
d'esports i els valors siguin, a la seva vegada, un array de jugadors
d'aquell esport. Després fes que es apareguin al navegador.
T'ajudo amb dos esports i el amb el bucle extern per a pintar-los:

<?php
$jugadors_de_lacrosse = array( "Billy Bitter", "Chris Bocklet", "Jeremy Boltus" );
$jugadors_de_pilota_basca = array( "Iñaqui" );
$esports = array();
$esports["Lacrosse"] = $jugadors_de_lacrosse;
$esports["Pilota Basca"] = $jugadors_de_pilota_basca;

foreach( $esports as $esport => $jugadors ) {
    echo "Els meu jugadors preferits d' $esport són "; //nombre deporte
    
    foreach( $jugadors as $jugador => $jug){
	//jugadors te enmagatzemat "$esports["Lacrosse"] = $jugadors_de_lacrosse;", automàticament te els noms dels jugadors
    echo " $jug ";
    }
}
?>
