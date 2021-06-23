<?php
echo $_FILES["uploadfile"]["tmp_name"];
echo "<br>";
echo $_FILES["uploadfile"]["name"];
if(!isset($_FILES["uploadfile"]["tmp_name"]) || !isset($_FILES["uploadfile"]["name"])){
    die("Fehler im Upload");
}
$fileName = $_FILES["uploadfile"]["name"];
$fileSplit = explode(".", $fileName);
$fileType = $fileSplit[sizeof($fileSplit)-1];

if($fileType=="jpg" OR $fileType=="png") {
    echo "Dateiart ok";
}else{
    die("Nicht zugelassende Dateiart");
}
if($_FILES["uploadfile"]["size"]> 800000){
    die("Datei zu groß");
}

if(!move_uploaded_file($_FILES["uploadfile"]["tmp_name"],"/home/gurzki/public_html/vorlesung/php/upload/files/".$_FILES["uploadfile"]["name"])){
    die("Upload fehlgeschlagen");
}


