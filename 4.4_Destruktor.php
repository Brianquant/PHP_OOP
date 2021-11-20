<?php

// Definition der Klasse Fahrzeug

class Fahrzeug
{
    private $geschwindigkeit; // Eigenschaft

    // Der Konstruktor gibt die Anfangswerte an
    function __construct($ges) 
    {
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
        return "Geschwindigkeit: " . "{$this->geschwindigkeit} km/h<br>";
    }

    function __destruct() 
    {
        echo "Desctruct";
    }
}

// Objekte erzeugen
$vespa = new Fahrzeug(20);
echo $vespa;
$vespa->beschleunigung(30);
echo $vespa;




?>