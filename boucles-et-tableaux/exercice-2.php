<?php
$numbers = [28, 32, 44, -67, 18, 24, -98];
for ($i=0; $i < count($numbers); $i++) {
    if ($numbers[$i]< 0) {
        echo $numbers[$i];
        echo "<br>";
    }
}

?>