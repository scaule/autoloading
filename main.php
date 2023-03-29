<?php
include 'Math/Addition.php';
include 'Math/Subtraction.php';


$sum = Addition::sum(5, 3);
$difference = Subtraction::difference(7, 2);

echo "Sum: $sum, Difference: $difference";
