<?php


//Übung 3.18

$zahl = array();

for ($i = 100; $i >= 0; $i--)
    $zahl[] = $i;

for ($i = 0; $i <= count($zahl); $i++) {
    echo $zahl[$i] . "<br>";
}
?>