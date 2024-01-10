<?php
function average(array $array): float {
    $result = 0;
    for ($i = 0; $i < count($array); $i++) {
        $result += $array[$i];
    }
    return $result / count($array);
}

echo average([12, 15, 18, 9]) . "<br>";
echo average([12, 15, 18, 11, 14]) . "<br>";
echo average([0, 0, 0, 0, 0]) . "<br>";
?>
