<?php 

class Fahrzeug {

    private $geschwindigkeit = 0;

    function beschleunigung($wert) 
    {
        $this->geschwindigkeit += $wert;
    }

    function __toString() 
    {
        return "Geschwindigkeit: $this->geschwindigkeit<br>";
    }
}


class Pkw extends Fahrzeug 
{
    protected $insassen = 0;

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

class Bus extends Pkw
{
    
    private $benzin = 50;


    function verbrauch($kilometer) 
    {
        return $this->benzin -= $kilometer;
    }

    function __toString() 
    {
        return "Verbleibender Sprit: $this->benzin ";;
     
    }

}

$fiat = new Pkw();
echo $fiat;

$fiat->einsteigen(3);
$fiat->beschleunigung(30);
echo $fiat;

$fiat->beschleunigung(-25);
echo $fiat;

$fiat->aussteigen(-1);
echo $fiat;

$linienBus = new Bus();
echo $linienBus;

$linienBus->verbrauch(-12);
echo $linienBus;





?>
