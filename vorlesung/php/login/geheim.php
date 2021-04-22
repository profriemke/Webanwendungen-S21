<?php
session_start();
if(isset($_SESSION["login"])){
    echo "Hallo liebe/r ".$_SESSION["login"];
    echo "geheime Info: OMM ist toll";
}else{
    echo "Du kommst hier nicht rein";
}