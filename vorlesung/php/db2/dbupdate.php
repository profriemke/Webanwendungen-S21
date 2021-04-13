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
$id=2;
$neu="Sven";

$statement= $pdo->prepare("UPDATE user SET vorname=:name WHERE id=:id");
$statement->bindParam(':id', $id);
$statement->bindParam(':name', $neu);
if(!$statement->execute()){
    die("Datenbank-Fehler");
}
?>
</body>
</html>