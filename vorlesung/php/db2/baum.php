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
    $statement = $pdo->prepare("SELECT * FROM baum");
    if($statement->execute()){
       while($row=$statement->fetch()){
           echo $row["id"]." ".$row["name"]." ".$row["latein"]." ".$row["hoehe"]."<a href='edit.php?id=".$row["id"]."'>Edit</a><br>";
       }
    }else{
        die("Datenbank-Fehler");
    }
?>
<form action="eintragen.php" method="post">
    Name:<input type="text" name="name"><br>
    Latein:<input type="text" name="latein"><br>
    Hoehe:<input type="text" name="hoehe"><br>
    <input type="submit">

</form>

</body>
</html>