<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=', '', '', array('charset'=>'utf8'));
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 3</title>
</head>
<body>
<h1>Aufgabe 3.15</h1>

<?php
    $statement = $pdo->prepare("SELECT * from buecher");

    if($statement->execute()){
        echo "<table>";
        while($row=$statement->fetch()){
            echo "<tr>";
            echo "<td>".$row["titel"]."</td>";
            echo "<td>".$row["autor"]."</td>";
            echo "<td>".$row["verlag"]."</td>";
            echo "<td>".$row["jahr"]."</td>";
            echo "<td>".$row["isbn"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        die("Datenbank-Fehler");
    }

?>
<a href="einfuegen.php">Buch einfügen</a>

</body>
</html>