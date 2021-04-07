<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $a= array("Katze", "Maus", "Hund", "Fisch", "Brathähnchen");
?>
<table>
    <tr>
        <th>Nr</th>
        <th>Tier</th>
    </tr>
<?php
    for($i=0; $i<sizeof($a); $i++){
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>";
        echo $a[$i];
        echo "</td>";
        echo "</tr>";
    }
?>
</table>


</body>
</html>
