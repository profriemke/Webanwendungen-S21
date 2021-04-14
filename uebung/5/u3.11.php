<?php

$name=array("Hans", "Susi", "Franz", "Thomas", "Tim", "Bernd", "Thomas", "Sandra", "Willi", "Tim");

echo "<table>";

for ($i=0; $i<count($name); $i++)
{
    echo "<tr>";
    echo "<td>".$name[$i]."</td>";
    echo "<td>".$i."</td>";
    echo "</tr>";
}
echo "</table>";

?>

