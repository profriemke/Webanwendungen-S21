<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_POST["vorname"]) and isset($_POST["nachname"])) {
    echo "Guten Morgen " . htmlspecialchars($_POST["vorname"]) . " " . htmlspecialchars($_POST["nachname"]);
}else{
    echo "Fehler im Formular";
}
?>
</body>
</html>