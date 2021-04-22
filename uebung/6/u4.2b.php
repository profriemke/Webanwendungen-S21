<?php
// Datei zum includen
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