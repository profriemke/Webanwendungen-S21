<?php
$f="hund.katze.jpg";
$a=explode(".",$f);

echo $a[0]."Punkt".$a[1];
echo "<br>";
echo $a[sizeof($a)-1];
echo "<br>";
for ($i=0; $i<=sizeof($a)-2; $i++){
    $file=$file.$a[$i];
}
echo $file;