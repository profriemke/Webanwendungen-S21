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
if (!isset($_POST["name"]) or !isset($_POST["latein"]) or !isset($_POST["hoehe"])) {
    die("Fehler im Formular");
}
$statement = $pdo->prepare("INSERT INTO baum (name, latein, hoehe) VALUES (?,?,?)");
 if($statement->execute(array(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["latein"]),htmlspecialchars($_POST["hoehe"])))){
     echo "eingetragen";
 }else{
     die("Datenbank-Fehler");
 }
?>

</body>
</html>