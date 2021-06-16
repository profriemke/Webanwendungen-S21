<?php
$pdo=new PDO();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<h1>Labor-Checkin</h1>
<?php
if(!isset($_GET["id"])){
    die("keine Id");
}
$statement= $pdo->prepare("UPDATE checkin SET checkedin='0' WHERE id=:id");
$statement->bindParam(":id", $_GET["id"]);
if($statement->execute()){
echo "Erfolgreich ausgecheckt";
}else{
    die("Datenbank-Fehler");
}
?>
<a href="index.php">zurück zur Startseite</a>
</body>
</html>