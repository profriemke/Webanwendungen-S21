<?php
class Rechnen
{
    function myadd($x, $y)
    {
        return $x + $y;
    }

    function mymult($x, $y)
    {
        return $x * $y;
    }

    function mydiv($x, $y)
    {
        if ($y == 0) {
            // echo"Fehler";
            // return;
            die("Fehler: Division durch 0");
        }
        return $x / $y;
    }
}
$hdm= new Rechnen();

echo $hdm->myadd(345465,454354);
echo "<br>";
echo $hdm->mymult(1,2);
echo "<br>";
echo $hdm->mydiv(56,3);