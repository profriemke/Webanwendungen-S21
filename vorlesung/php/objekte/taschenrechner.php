<?php
class Taschenrechner {
    private $speicher = 0;

    function addiere($wert){
        $this->speicher = $this->speicher+$wert;
    }
    function subtrahiere($wert){
        $this->speicher = $this->speicher-$wert;
    }
    function ergebnis(){
        return $this->speicher;
    }
}

$tr = new Taschenrechner();

$tr->addiere(5);
$tr->subtrahiere(3);
$tr->addiere(3434324);
echo $tr->ergebnis();