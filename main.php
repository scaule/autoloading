<?php
require_once 'autoload.php';

use Math\Addition;
use Math\Subtraction;

$sum = Addition::sum(5, 3);
$difference = Subtraction::difference(7, 2);

echo "Sum: $sum, Difference: $difference";
