<?php 

class math 
{
    const pi = 3.1415926;
    private $id;
    public static $nummer;

    function __construct()
    {
        self::$nummer = self::$nummer + 1;
        $this->id = self::$nummer;
    }

    static function quadrat($p) 
    {
        return $p * $p;
    }

    static function fleachenInhalt($a, $b) {
        return $a * $b;
    }

    static function fleachenUmfang($a, $b) {
        return 2 * $a + 2 * $b;
    }

    function __toString() 
    {
        return "Objekt $this->id, &pi; = " . self::pi . 
                ", 3.2<sup>2</sup> = " .
                self::quadrat(3.2) . "<br>";
    }
}


$z = 2.5;
echo "$z<sup>2</sup> " . math::quadrat($z) . "<br>";

// Objekt 1
$x = new math();
echo $x;
echo "Anzahl: " . math::$nummer . "<br>";

// Objekt 2
$y = new math();
echo $y;
echo "Anzahl: " . math::$nummer . "<br>";

$g = 3.7;
echo "$g<sup>2</sup> " . math::quadrat($g) . "<br>";

$a = 6;
$b = 3;
echo "Objekt: Rechteck" . "<br>" . "Seite A: $a, Seite B: $b" . "<br>" . "Flächeninhalt:";
echo math::fleachenInhalt($a, $b);


echo math::pi . "<br>";




?>