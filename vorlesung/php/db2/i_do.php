<?php
require("./includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

echo "INSERT INTO user (vorname, name) VALUES ('".$_POST["vorname"]."','".$_POST["name"]."')";
$statement= $pdo->prepare("INSERT INTO user (vorname, name) VALUES ('".$_POST["vorname"]."','".$_POST["name"]."')");

if($statement->execute()){
    echo "Datensatz eingefügt";
}else{
    echo "Fehler Datenbank";
}
?>
<a href="user_formular.php">zurück</a>
</body>
</html>