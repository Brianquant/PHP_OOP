<?php 

class Fahrzeug {

    private $geschwindigkeit = 0;

    private $beschleunigung = 0;

    function __construct($ge, $be) 
    {
        $this->geschwindigkeit = $ge;
        $this->beschleunigung = $be;
    }

    function geschwindigkeit($wert) 
    {
        $this->geschwindigkeit += $wert;
    }

    function beschleunigung($wert) 
    {
        $this->beschleunigung += $wert;
    }

    function __toString() 
    {
        return "Geschwindigkeit: $this->geschwindigkeit<br>Beschleunigung: $this->beschleunigung ";
    }
}


class Pkw extends Fahrzeug 
{
    protected $insassen = 0;


    function __construct($ge, $be, $anz) 
    {
        $this->insassen = $anz;

        parent::__construct($ge, $be);
    }

    function einsteigen($anzahl) 
    {
        $this->insassen += $anzahl;
    }

    function aussteigen($anzahl) 
    {
        $this->insassen -= $anzahl;
    }

    function __toString() 
    {
        return "Insassen: $this->insassen "
                . parent::__toString();
        
    }

}


$fiat = new Pkw(30, 9.2, 5);
echo $fiat;

$fiat->einsteigen(3);
$fiat->beschleunigung(30);
echo $fiat;

$fiat->beschleunigung(-25);
echo $fiat;

$fiat->aussteigen(-1);
echo $fiat;







?>
