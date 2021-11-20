<?php

// Definition der Klasse Fahrzeug

class Fahrzeug
{
    private $geschwindigkeit; // Eigenschaft
    private $bezeichnung;

    // Der Konstruktor gibt die Anfangswerte an
    function __construct($bez, $ges) 
    {
        $this->bezeichnung = $bez;
        $this->geschwindigkeit = $ges;
    }

    function beschleunigung($wert) // Methode
    {
        $this->geschwindigkeit += $wert;
    }

    function ausgabe() 
    {
        echo "Geschwindigkeit: $this->geschwindigkeit<br>";
    }

    function __toString() 
    {
        return "{$this->bezeichnung}, " . "{$this->geschwindigkeit} km/h<br>";
    }
}

// Objekte erzeugen
$vespa = new Fahrzeug("Vespa Piaggio", 25);
$scania = new Fahrzeug("Scania TS", 62);

// Objekte ausgeben

// var_dump($vespa);
// var_dump($scania);
// echo serialize($vespa);
// echo serialize($scania);
echo $vespa;
echo $scania;

// Objekte verändern und ausgeben
$vespa->beschleunigung(20);
echo $vespa;

$vespa->__construct("Vespa Formosa", 35);
echo $vespa;



?>