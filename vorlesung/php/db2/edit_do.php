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
if(isset($_POST["name"]) and isset($_POST["latein"]) and isset($_POST["hoehe"]) and isset($_GET["id"])) {
    $statement = $pdo->prepare("UPDATE baum SET name=?, latein=?, hoehe=? WHERE id=?");
    if ($statement->execute(array(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["latein"]), htmlspecialchars($_POST["hoehe"]), $_GET["id"]))) {
        echo "Update erfolgreich";
    } else {
        die("Datenbank-Fehler");
    }
}else{
    die("Formular-Fehler");
}
?>
<a href="baum.php">zur Übersicht</a>
</body>
</html>