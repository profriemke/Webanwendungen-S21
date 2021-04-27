<?php

$password="geheim";
$hash = password_hash($password, PASSWORD_BCRYPT);
echo $hash;
if(password_verify($password, $hash)){
    echo "Sesam geöffnet";
}else{
    echo "Du kommst hier nicht rein";
}