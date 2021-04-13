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
 echo htmlspecialchars($_POST["name"]);
 echo htmlspecialchars($_POST["vorname"]);
 $statement= $pdo->prepare("INSERT INTO user (vorname, name) VALUES (:vorname, :name)");
 $statement->bindParam(":vorname", htmlspecialchars($_POST["vorname"]));
 $statement->bindParam(":name", htmlspecialchars($_POST["name"]));

 if($statement->execute()){
     echo "Datensatz eingefügt";
 }else{
     echo "Fehler Datenbank";
 }
?>
<a href="user_formular.php">zurück</a>
</body>
</html>