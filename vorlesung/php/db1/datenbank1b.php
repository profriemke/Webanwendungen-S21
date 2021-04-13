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
$statement = $pdo->prepare("SELECT * FROM user");
if($statement->execute()) {
    $data = $statement->fetchAll();
    var_dump($data);
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
}
?>


</body>
</html>