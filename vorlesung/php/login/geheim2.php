<?php
session_start();
if(!isset($_SESSION["login"])) {
    die("Nutzer nicht angemeldet");
}

echo "Hier geheime Info";
