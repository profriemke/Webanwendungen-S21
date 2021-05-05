<?php
session_start();
if(isset($_POST["zahl"])){
    $_SESSION["zahl"]=$_POST["zahl"];
    echo $_POST["zahl"]." <-- Post <br>";
    echo $_SESSION["zahl"]." <-- Session <br>";
}else{
    echo "Es wurde keine Zahl eingegeben. <br>";
    die("Formular-Fehler");
}
?>

<html>
    <a href="quadrat.php">Hier gehts zur Quadrat-Seite!</a>
</html>