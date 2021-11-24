<?php 

interface Iterators
{
    function current();
    function next();
    function key();
    function valid();
    function rewind();
}

class Feld implements Iterators
{
    private $nr;
    private $zahlen = array(17.5, 19.2, 21.8, 21.6, 18.1);

    function __construct() {
        $this->nr = 0;
    }

    function current() 
    {
        return $this->zahlen[$this->nr];
    }

    function next() 
    {
        return $this->nr = $this->nr + 2;
    }

    function key() 
    {
        return $this->nr;
    }

    function valid() 
    {
        return isset($this->zahlen[$this->nr]);
    }

    function rewind() 
    {
        $this->nr = 0;
    }
}

$feldObj = new Feld;

foreach($feldObj as $schluessel => $wert) {
    echo "$schluessel/$wert" . "<br>";
}

for($feldObj->rewind(); $feldObj->valid(); $feldObj->next()) {
    $schluessel = $feldObj->key();
    $wert = $feldObj->current();
    echo "$schluessel/$wert, ";
}

?>