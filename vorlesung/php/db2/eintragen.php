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
if (!isset($_POST["name"]) or !isset($_POST["latein"]) or !isset($_POST["hoehe"]) or !isset($_FILES["bild"])) {
    die("Fehler im Formular");
}
if($_FILES["bild"]["size"]> 8000000){
    die("Bild zu groß");
}
$fileSplit= explode(".", $_FILES["bild"]["name"]);
$fileType=$fileSplit[sizeof($fileSplit)-1];
echo $fileType;
if(!($fileType =="png" OR $fileType =="jpg")){
    die("falscher Dateityp");
}

if(!move_uploaded_file($_FILES["bild"]["tmp_name"],"/home/gurzki/public_html/vorlesung/php/db2/bilder/".$_FILES["bild"]["name"] )){
    die ("Upload-Fehler");
}

$statement = $pdo->prepare("INSERT INTO baum (name, latein, hoehe, bild) VALUES (?,?,?,?)");
 if($statement->execute(array(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["latein"]),htmlspecialchars($_POST["hoehe"]), $_FILES["bild"]["name"]))){
     echo "eingetragen";
 }else{
     die("Datenbank-Fehler");
 }

?>

</body>
</html>