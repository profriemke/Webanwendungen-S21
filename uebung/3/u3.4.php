<?php
// Variante 1
$a = array();
$a[0] = "Haus";
$a[1] = "Baum";
$a[2] = "Maus";
$a[3] = "Fisch";

foreach ($a as $key=>$value) {
        echo $value;
}

// Variante 2

$b = array("Haus", "Baum", "Fisch", "Maus", "Kamera", "Präsident", "HdM");

for($i=0; $i<sizeof($b); $i++) {
    echo $b[$i]."<br>";
}