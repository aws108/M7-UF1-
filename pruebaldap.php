<h1>prova LDAP</h1>
 
<?php
$ldapconfig['host'] = 'localhost';
$ldapconfig['port'] = 389; // es el 389 però amb NULL l'agafa per defecte
$ldapconfig['basedn'] = 'ou=usuaris,dc=sergio,dc=lizana';
$ldapconfig['authrealm'] = 'My Realm';
 
$username = "manolo";
$passw = "manolo123";
 
echo "Inici...</br>";
 
$ds = ldap_connect($ldapconfig['host'],$ldapconfig['port']);
 
if( !$ds ) {
    echo "Error en la connexio</br>";
    exit(0);
}
 
echo "buscant usuari... <b>".$username."</b><br>\n";
$r = ldap_search( $ds, $ldapconfig['basedn'], 'uid=' . $username );
 
if ($r) {
    $result = ldap_get_entries( $ds, $r);
    var_dump($result);
    echo "\n<br><br>\n";
    if (count($result)>0) {
        if($result[0]) {
            echo "usuari trobat: <b>".$username."</b><br>\n";
            // Eps! si no, no va!
            ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
            // check passw
            if (ldap_bind( $ds, $result[0]['dn'], $passw) ) {
                echo "Contrasenya OK<br>\n";
            } else {
                echo "Contrasenya ERRONIA<br>\n";
            }
        } else {
		echo "Usuari <b>".$username."</b> no trobat";
	}
    }
} else {
	echo "Error accedint a LDAP";
}
?>
