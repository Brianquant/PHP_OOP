<?php 

include "4.2_Klassen_&_Objekte.php";

// Objekte der Klasse Fahrzeug erzeugen

$vespa = new Fahrzeug();
$scania = new Fahrzeug();

// Typ pruefen
if(is_object($vespa)) 
{
    echo "Das ist ein Objekt" . "<br>";
} else 
{
    echo "Ist kein Objekt" . "<br>";
}

// Erstes Objekt betrachten beziehungsweise vereandern 
$vespa->ausgabe();
$vespa->beschleunigung(20);
$vespa->ausgabe();
// Zweites Objekt betrachten 
$scania->ausgabe();

// Private Eigenschaft, nicht ereichbar 
echo "Private Eigenschaft: $scania->geschwindigkeit";



?>