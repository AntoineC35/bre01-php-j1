<?php
function concat(string $string1, string $string2): string {
    $string = $string1.$string2;
    return $string;
}

echo concat("Hello ", "World !<br>");
echo concat("À la ", "claire fontaine<br>");
echo concat("La vie, l'univers ", "et tout le reste<br>");
?>