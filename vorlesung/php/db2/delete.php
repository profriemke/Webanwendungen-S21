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
if(isset($_GET["id"])) {
    $statement = $pdo->prepare("DELETE FROM baum WHERE id=:id");
    $statement->bindParam(":id", $_GET["id"]);
    if($statement->execute()){
        echo "Datensatz gelöscht";
    }else{
        die("Datenbank-Fehler");
    }
}

?>
<a href="baum.php">zur Übersicht</a>
</body>
</html>