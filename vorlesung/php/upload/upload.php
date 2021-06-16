<?php
echo $_FILES["uploadfile"]["tmp_name"];
echo "<br>";
echo $_FILES["uploadfile"]["name"];

if(!move_uploaded_file($_FILES["uploadfile"]["tmp_name"],"/home/gurzki/public_html/vorlesung/php/upload/files/".$_FILES["uploadfile"]["name"])]{
    die ("Upload fehlgeschlagen");
}


