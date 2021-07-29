<?php
//Input: n=3, $arr = [11, 2, 8, 10, 5, 99, 1, 8, 9]
//→ Output [11, 10, 1, 2, 5, 8, 8, 99, 9]
$cars=array(11, 2, 8, 10, 5, 99, 1, 8, 9);
$n = 3;

$new = array_chunk($cars,$n);
//print_r(json_encode($new));
$arr_new = array($new[0][0],$new[1][0],$new[2][0],$new[0][1],$new[1][1],$new[2][1],$new[0][2],$new[1][2],$new[2][2]);
print_r(json_encode($arr_new));
?>