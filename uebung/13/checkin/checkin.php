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
<h1>Dein Checkin</h1>
<?php
if(!isset($_POST["name"])){
    die("Du hast keinen Namen");
}
$name= htmlspecialchars($_POST["name"]);
$statement = $pdo->prepare("INSERT INTO checkin (name,checkedin) VALUES (:name, '1') ");
$statement->bindParam(":name", $name);
if(!$statement->execute()){
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die("Datenbank-Fehler");
}
echo "Dein Checkin war erfolgreich"
?>
<a href="index.php">zurück zur Übersicht</a>

</body>
</html>