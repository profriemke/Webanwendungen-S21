<?php
session_start();
    if(isset($_SESSION["zahl"])){
        $zahl=(int)$_SESSION["zahl"];
        echo "Die Zahl ist angekommen!<br>";
        echo "Die Zahl lautet: ".$zahl."<br>";
        echo "Das Quadrat der Zahl lautet: ".pow($zahl,2)."<br>";

    }else{
        echo "Es wurde keine Zahl eingegeben. <br>";
    }
?>
<html>
    <a href="quadrat_end.php">Hier gehts zur Session-End-Seite!</a>
        <br><br>
    <a href="eingabe.php">Hier gehts zurück zur Zahl-Eingabe!</a>
</html>
