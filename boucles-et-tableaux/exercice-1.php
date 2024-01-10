<?php
$i= 0;
$animals = ["Chat", "Chien", "Lapin", "Souris"];
while($i < count($animals)) 
{
    echo "$animals[$i]\n";
    $i++;
}
echo "<br>";
for ($i=0; $i < count($animals); $i++) {
    echo "$animals[$i]\n";
}
?>