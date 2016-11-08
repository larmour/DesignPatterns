<?php
require_once ('strategy.php');
echo "Testing out 1.. \n";
$commander = new Commander('1');
$commander->command();
echo "<br>";
echo "Testing out 2.. \n";
$commander = new Commander('2');
$commander->command();
echo "<br>";
$commander = new Commander('3');
$commander->command();
echo "<br>";
?>