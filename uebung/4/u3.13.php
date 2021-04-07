<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 3</title>
</head>
<body>
<h2>Aufgabe 3.13</h2>

<?php
$name = array ( );

$name["Franz"] = "Müller";
$name["Susi"] = "See";
$name["Karl"] = "Klee";
$name["Tara"] = "Tee";

echo "<p>Susi ihr Nachname ist ".$name["Susi"]." </p>";
echo "<p>Tara ihr Nachname ist ".$name["Tara"]." </p>";

$name["Tara"] ="Kafee";
echo "<p>Tara ihr neuer Nachname ist ".$name["Tara"]." </p>";
?>

</body>
</html>