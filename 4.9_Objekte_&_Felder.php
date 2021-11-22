<?php 

class Bestellung {

    private $bestellnr;
    private $posten;
    private $delivery;

    function __construct($bn, $pf, $del) 
    {
        $this->bestellnr = $bn;
        $this->posten = $pf;
        $this->delivery = $del;
    }

    function __toString() 
    {
        $gesamt = 0;
        $ausgabe = "Bestellnr.: $this->bestellnr<br>";
        for($i = 0; $i < count($this->posten); $i++) {
            // Nicht innnerhalb der Zeichenkette
            $ausgabe .= "Posten " . ($i + 1) . ": " . $this->posten[$i] . "<br>";
            $gesamt += $this->posten[$i]->postenpreis();
        }
        
        $deliver = "";
        $deliver .= $this->delivery->deliver();
        $ausgabe .= "Gesamtpreis: $gesamt &euro;<br> Status: $deliver";
        return $ausgabe;
    }
}

class Bestellposten {

    private $artikel;
    private $menge;
    private $preis;

    function __construct($art, $meng, $pr) 
    {
        $this->artikel = $art;
        $this->menge = $meng;
        $this->preis = $pr;
    }


    function postenpreis() 
    {
        return $this->menge * $this->preis;
    }

    function __toString() {
        return "$this->artikel, $this->menge St., " . "$this->preis &euro;";
    }
}


class toGo {

    private $antwort;

    function __construct($ant) {
        $this->antwort = $ant;
    }

    function deliver() 
    {
        if($this->antwort === "yes") 
        {
            return $this->antwort = "Zum Mitnehmen";
        } else {
            return $this->antwort = "Zum hier essen";
        }
    } 

}

/* Hauptprogramm */

$meineBestellung = new Bestellung(583, array(
    new Bestellposten("Apfel", 3, 1.35),
    new Bestellposten("Banane", 5, 0.85),
    new Bestellposten("Mango", 2, 1.95)
), new toGo("No"));

echo $meineBestellung;


?>