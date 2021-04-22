<?php
class Pferd {
    private $name;

    function leseReiter(){
        return $this->name;
    }
    function setzeDrauf($name){
        $this->name = $name;
    }
}
$herta = new Pferd();
$horst = new Pferd();

$horst->setzeDrauf("Manfred");
$herta->setzeDrauf("Lissy");

echo  $herta->leseReiter();
echo  $horst->leseReiter();