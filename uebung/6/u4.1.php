<?php
function myadd($x,$y){
    return $x + $y;
}
function mymult($x, $y){
    return $x * $y;
}
function mydiv($x, $y){
    if($y==0){
        // echo"Fehler";
        // return;
        die("Fehler: Division durch 0");
    }
    return $x / $y;
}
echo myadd(1,2);
echo "<br>";
echo mydiv(10,10);
echo "<br>";
echo mymult(33,33);
echo "<br>";
echo myadd(mymult(mydiv(144,12),2), mymult(3,3));