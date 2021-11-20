<?php

// Definition der Klasse Fahrzeug

class Fahrzeug
{
    private $geschwindigkeit; // Eigenschaft
    private $bezeichnung;

    // Der Konstruktor gibt die Anfangswerte an
    function __construct($bez = "xxx", $ges = 0) 
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
        return "Name: " . "{$this->bezeichnung}" . "<br>" . "Geschwindigkeit: " . "{$this->geschwindigkeit} km/h<br>";
    }

   
}

// Objekte der Klasse erzeugen erzeugen
$vespa = new Fahrzeug("Vespa Paggio");
$scania = new Fahrzeug("", 62);
$jeep = new Fahrzeug("Jeep Cherokee", 45);
$hyundai = new Fahrzeug();

echo $vespa;
echo $scania;
echo $jeep;
echo $hyundai;




?>