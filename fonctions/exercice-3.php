<?php
function getFirst($table){
    if (empty($table)) {
        return "null";
    } else {
        return $table[0];
    }
}

echo getFirst([13, 24, 45]) . "<br>";
echo getFirst([]) . "<br>";
?>
