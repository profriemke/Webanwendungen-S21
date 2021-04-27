<?php
require("./includes/db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$statement = $pdo->prepare("SELECT * FROM user WHERE login=:login");
$statement->bindParam(":login", $_POST["login"]);
if($statement->execute()){
    if($row = $statement->fetch()){
        // Datensatz vorhanden
        if(password_verify($_POST["password"],$row["password"])){
        // if($row["password"]==$_POST["password"]){
            // Passwort ok
            echo "Herzlich Willkommen, ".$row["login"];
            $_SESSION["login"]=$row["login"];
        } else{
            // Passwort falsch
            die("Passwort falsch");
        }
    }else{
        // User existiert nicht
        echo "Nutzer nicht vorhanden";
    }
}else{
    die("Datenbank-Fehler");
}
?>
</body>
</html>