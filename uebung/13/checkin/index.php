<?php
$pdo=new PDO();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<h1>Labor-Checkin</h1>
<?php
$statement= $pdo->prepare("SELECT * FROM checkin WHERE checkedin='1'");
if($statement->execute()){
    while ($row=$statement->fetch()){
        echo $row["name"];
        echo " <a href='checkout.php?id=".$row["id"]."'>Checkout</a>";
        echo "<br>";
    }
}else{
    die("Datenbank-Fehler");
}
?>
<h2>jetzt einchecken</h2>
<form action="checkin.php" method="post">
    Name:<input type="text" name="name"><br>
    <input type="submit" value="einchecken">
</form>
</body>
</html>