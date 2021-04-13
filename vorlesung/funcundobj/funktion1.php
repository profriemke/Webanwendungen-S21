<?php
function printMehrmals($string, $count){
    for ($i=1; $i<=$count; $i++){
        echo $string."<br>";
    }
}
printMehrmals("hallo", 4);
printMehrmals("welt", 400);