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
$statement = $pdo->prepare("SELECT * FROM baum WHERE id=?");
if($statement->execute(array($_GET["id"]))){
    if($row=$statement->fetch()){
        ?>
        <form action="edit_do.php?id=<?php echo $row["id"]; ?>" method="post">
            <input type="text" name="name" value="<?php echo $row["name"];?>">
            <input type="text" name="latein" value="<?php echo $row["latein"];?>">
            <input type="text" name="hoehe" value="<?php echo $row["hoehe"];?>">
            <input type="submit">
        </form>
<?php
    }else{
        echo("Baum nicht vorhanden");
    }
}else{
    die("Datenbank-Fehler");
}
?>
</body>
</html>