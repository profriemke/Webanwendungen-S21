<?php
$directory = "/home/gurzki/files/";
$mimetype = "image/jpg";
$filename = $_GET["filename"];
$filepath = $directory.$filename;
header("Content-Type:".$mimetype);
header("Content-Disposition: attachment;filename={$filename}");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filepath));
readfile($filepath);

swörter