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
    if(!isset($_POST["login"]) or !isset($_POST["password"])){
        die("Formular-Fehler");
    }
    $statement = $pdo->prepare("INSERT INTO user (login, password) VALUES (?,?)");
    if($statement->execute(array(htmlspecialchars($_POST["login"]), password_hash($_POST["password"], PASSWORD_BCRYPT)))){
       echo "In Datenbank eingetragen";
    }else{
        die("Datenbank-Fehler");
    }
?>
</body>
</html>