<?php
declare(strict_types=1);
function number(int $int) {
    echo "the number is: $int";
};

echo number(1);

$x = "13.3333";
var_dump($x);
echo "<br>";
$y = (float) $x;
var_dump($y);