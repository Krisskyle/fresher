<?php
//Input: [0, 100, -4, 8, 143, 5, 99, 100]
// Output: 243
$numbers = array(0, 100, -4, 8, 143, 5, 99, 100);
 
// Sorting and printing array
rsort($numbers);
$total = $numbers[0] + $numbers[1];
echo($total);
?>