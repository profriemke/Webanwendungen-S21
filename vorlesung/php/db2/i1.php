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
$statement= $pdo->prepare("SELECT * FROM user");
if ($statement->execute()){
    while($row=$statement->fetch()){
        echo $row["id"]." ".$row["vorname"]." ".$row["name"]."<br>";
    }
}else{
    die("Datenbank-Fehler");
}

?>

<br>
Datensatz hinzufügen
<form action="i_do.php" method="post">
    Vorname:
    <input type="text" name="vorname">
    Nachname:
    <input type="text" name="name">
    <input type="submit">

</form>

</body>
</html>