<?php
$a=array();

for($i=0;$i<=100; $i++){
    $a[$i]=100-$i;
}

for($i=0; $i<=100;$i++){
    echo "Index: ".$i." Wert: ".$a[$i]."<br>";
}