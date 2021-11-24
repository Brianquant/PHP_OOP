<?php 

// Ein Interface gibt die Vorschriften an, wie eine Klasse konstruiert werden soll.

interface Fahrbar 
{
    function rollen();
    function reifenwechseln();
}

interface Schwimmfaehig 
{
    function anlegen();
    function kentern();
}

class AmphiCar implements Fahrbar, Schwimmfaehig 
{


    function anlegen() { echo "Es legt an <br>"; }
    function kentern() { echo "Es kentert <br>"; }

    function rollen() { echo "Es rollt<br>"; }
    function reifenwechseln() { echo "Es werden Reifen gewechselt<br>"; }

    function bewegen() { echo "Es bewegt sich <br>"; }

      
}

$VwTyp166 = new AmphiCar("wasser");
$VwTyp166->anlegen();
$VwTyp166->kentern();
$VwTyp166->rollen();
$VwTyp166->reifenwechseln();
$VwTyp166->bewegen();

        
    



?>