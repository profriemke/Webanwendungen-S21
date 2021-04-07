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
$name="Horst";
$vorname="Otto";

$statement = $pdo->prepare("INSERT INTO user (vorname, name) VALUES (:vorname, :name)");
$statement->bindParam(":vorname", $vorname);
$statement->bindParam(":name", $name);

if($statement->execute()){
    echo "Datensatz eingefügt";
    echo $statement->queryString;
}else{
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die("Datenbank-Fehler");
}
echo "Hier gehts weiter ...";
?>


</body>
</html>