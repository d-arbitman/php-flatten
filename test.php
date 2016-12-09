<?php
require_once (__DIR__ . "/flatten.php");

$a= [[1,2,[3, 4, [5, 6, 7], 8]], [9, 10, 11, [12, 13]]] ;

print_r($a);
print_r(flatten($a));
