<?php
//Input: [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15]
//Output: [[0, 1], [4, 5], [13, 14], [14, 15]]
$arr = array(1, 5, 4, 7, 9, 0, -10, 13, 15, 14, 93);


for($i = 0; $i < count($arr); $i++){
    $a = $arr[$i];
    $b = $a + 1;
    for($j = 0; $j < count($arr); $j++) {
                
                if($arr[$j] == $b){
                    $c = array(
                        [$arr[$i], $arr[$j]]
                        );
                        print_r(json_encode($c));
                }
               
                    
            }
            
             
    }







?>
