<?php
$datei = "katze.jpg";

$teile = explode(".", $datei);

echo "Dateiname: ".$teile[0];
echo "<br>Dateiendung: ".$teile[1];

echo "<br>";


$datei = "katze.nett.guckt.kralle.jpg";

$teile = explode(".", $datei);

echo "<br>Größe Array: ".sizeof($teile);
echo "<br>Dateiname: ".$teile[0];
echo "<br>Dateiendung: ".$teile[sizeof($teile)-1];