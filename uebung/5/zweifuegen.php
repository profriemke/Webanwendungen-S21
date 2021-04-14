<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=', '', '', array('charset'=>'utf8'));
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 3</title>
</head>
<body>
<h1>Aufgabe 3.15</h1>

<?php
$statement = $pdo->prepare("INSERT INTO buecher (titel, autor, verlag, jahr, isbn) VALUES (?,?,?,?,?)");

if($statement->execute(array("Die Welt der Regenwürmer", "Hans Wurm", "Gute Erde", 1999, 999))){
    echo "Datensatz eingefügt";
    echo $pdo->lastInsertid();
}else{
    die("Datenbank-Fehler");
}
if($statement->execute(array("Flugzeuge zum Frühstück", "Lisa Luft", "Flieger", 1998, 6123))){
    echo "Datensatz eingefügt";
    echo $pdo->lastInsertid();
}else{
    die("Datenbank-Fehler");
}

?>
</body>
</html>