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
    $name="Horst";
    $vorname="Otto";

    $statement = $pdo->prepare("INSERT INTO user (vorname, name) VALUES (?, ?)");

    if($statement->execute(array($vorname, $name))){
       echo "Datensatz eingefügt";
    }else{
        echo "Datenbank-Fehler";
        echo $statement->errorInfo()[2];
        echo $statement->queryString;
    }

?>


</body>
</html>