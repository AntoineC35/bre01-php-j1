<?php
$i=0;
$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

while($i<count($users)) {
    echo($users[$i]["firstName"]." ". $users[$i]["lastName"]);
    echo "<br>";
    $i++;
}
?>