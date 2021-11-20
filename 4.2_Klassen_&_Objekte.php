<?php

// Definition der Klasse Fahrzeug

class Fahrzeug
{
    private $geschwindigkeit; // Eigenschaft


    function beschleunigung($wert) // Methode
    {
        $this->geschwindigkeit += $wert;
    }

    function ausgabe() 
    {
        echo "Geschwindigkeit: $this->geschwindigkeit<br>";
    }

    
}


?>