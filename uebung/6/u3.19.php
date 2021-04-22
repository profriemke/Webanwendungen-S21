<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>3.19</title>
</head>
<body>
<?php
for($i=0; $i<=100; $i++) {
    if ($i % 2 != 0) {
        echo $i." "."ist ungerade";
    }
    else {
        echo $i." "."ist gerade";
    }
    echo "<br>";
}
?>
</body>
</html>