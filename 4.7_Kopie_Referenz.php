<?php

// Definition der Klasse Fahrzeug

class Fahrzeug
{
    private $geschwindigkeit; // Eigenschaft
    private $bezeichnung;


    function __construct($bez, $ge) 
    {
        $this->bezeichnung = $bez;
        $this->geschwindigkeit = $ge;
    }


    function beschleunigung($wert) // Methode
    {
        $this->geschwindigkeit += $wert;
    }

    function __toString() {
        return "$this->bezeichnung, " . "$this->geschwindigkeit km/h<br>";
    }

    function ausgabe() 
    {
        echo "Geschwindigkeit: $this->geschwindigkeit<br>";
    }


    function __clone() 
    {
        $this->bezeichnung = "Klon von: " . $this->bezeichnung;
        $this->geschwindigkeit = $this->geschwindigkeit + 1;
    }

    static function kopieVon($ori)
    {
        $neu = new Fahrzeug("", 0);
        $neu->bezeichnung = "Kopie von: " . $ori->bezeichnung;
        // echo "Original:" . $ori->bezeichnung;
        $neu->geschwindigkeit = $ori->geschwindigkeit + 1;
        return $neu;
    } 
}

// Originalobjekt
$vespa = new Fahrzeug("Vespa Piagio", 25);

// Zweite Referenz auf Originalobjekt
$suzuki = $vespa;

// Klonen eines Objektes
$yamaha = clone $vespa;

// Klone ein zweites 
$audi = clone $vespa;
$audi->beschleunigung(20);
echo "Audi: " . $audi;

// Übergabe von Objekten an Methode, Rückgabe von Objekt aus Methode
$honda = Fahrzeug::kopieVon($vespa);

// Auswirkung auf zweite Referenz
$vespa->beschleunigung(50);
echo "Suzuki: " . $suzuki;

// Ausgabe des Klons 
echo "Yamaha: " . $yamaha;

// Änderung und Ausgabe der Kopie 
$honda->beschleunigung(30);
echo "Honda: " . $honda;

$porsche = Fahrzeug::kopieVon($audi);
echo "Porsche: " . $porsche;








?>