<?php
function average($table) {
    $result = 0;
    for ($i = 0; $i < count($table); $i++) {
        $result += $table[$i];
    }
    return $result / count($table);
}

echo average([12, 15, 18, 9]) . "<br>";
echo average([12, 15, 18, 11, 14]) . "<br>";
?>
