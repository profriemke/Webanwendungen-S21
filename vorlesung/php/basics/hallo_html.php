<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Erste Überschrift</h1>
<?php
    /*
        erstes
        Echo
    */
    echo "hallo";
?>
<h2>Zweite Überschrift</h2>
<?php
    echo "auch hallo";
?>
<h2>Link-Test</h2>

<a href="<?php echo "https://www.hdm-stuttgart.de";?>">Link zur HdM</a>
<?php echo "<a href=\"https://www.hdm-stuttgart.de\">Link zur HdM</a>"?>

<h2>Strings</h2>
<?php
 $name="Riemke";
 $ort="Stuttgart";

 echo $name." ".$ort;
 echo "<br>";
 echo "$name wohnt in $ort";

?>
<h2>Rechnen</h2>
<?php
$a=2;
$b=3;
echo $a+$b;
?>
<h2>ein if</h2>
<?php
$a=20;
$b=10;

if ($a<$b) {
    echo "a kleiner b";
}else{
    echo "b kleiner a";
}
?>
<h2>for-Schleife</h2>
<?php
    for($i=1;$i<=20;$i++){
        echo "$i. hallo<br>";
    }

?>
<h2>While</h2>
<?php
    $i=1;
    while($i<=20){
        echo "$i <br>";
        $i++;
    }

?>


</body>
</html>