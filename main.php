<?php

require_once "autoload.php";

use Math\Addition;

$sum = Addition::sum(5, 3);
$difference = Math\Subtraction::difference(7, 2);

echo "Sum: $sum, Difference: $difference";
