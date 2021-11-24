<?php 

namespace ErsterNamensraum 
{
    class TestklasseA{}
    echo "<br>" . TestklasseA::class . "<br>";

    class TestklasseB
    {
        function __construct() 
        {
            echo "TestklasseB-Objekte<br>";
        }

        const pi = 3.1415926;

        function fkt() { echo "Funktion fkt()<br>"; }
    }
}

namespace ZweiterNamensraum 
{
    class TestklasseA{}
    echo "<br>" . TestklasseA::class . "<br>";

    use ErsterNamensraum\TestklasseB;
    $x = new TestklasseB();

    function pow($a, $b)
    {
        return $a + $b;
    }

    echo  pow(2,3) . "<br>";
    echo \pow(2,3) . "<br>";
}

namespace DritterNamensraum 
{
    class TestklasseC 
    {
        private $input;

        function __construct($input) 
        {
         $this->input = $input;  
        }

        function squareRoot() 
        {
            return $this->input * $this->input;
        }


    }
}

namespace 
{
    class TestklasseA{}

    echo "<br>" . TestklasseA::class . "<br>";

    use ErsterNamensraum\TestklasseB;
    // use ZweiterNamensraum;
    $testB = new TestklasseB();

    use DritterNamensraum\TestklasseC;
    $testC = new TestklasseC(4);
    echo "Wurzel: " . $testC->squareRoot() . "<br>";



    echo TestklasseB::pi . "<br>";

    echo $testB->fkt();

    $pow = pow(3,4);
    echo $pow . "<br>";

    
}
?>