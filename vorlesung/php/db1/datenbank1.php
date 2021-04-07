<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=datenbankname', 'datenbanklogin', 'datenbankpasswort', array('charset'=>'utf8'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $statement = $pdo->prepare("SELECT * FROM user");
    if($statement->execute()) {
        while ($row = $statement->fetch()) {
            echo $row["name"];
            echo ", ";
            echo $row["vorname"];
            echo ", id: ";
            echo $row["id"];
            echo "<br>";
        }
    }else{
        echo "Datenbank-Fehler";
        echo $statement->errorInfo()[2];
        echo $statement->queryString;
    }


?>


</body>
</html>