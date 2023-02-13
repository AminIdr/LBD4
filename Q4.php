<?php
$arr = [1, 3, 5, 7, 9];
for($i = 0; $i < count($arr); $i++){
    $k = $i;
    for($j = $i; $j < count($arr); $j++){
        if($arr[$k] < $arr[$j]){
            $k = $j;
        }
    }
    $tmp = $arr[$i];
    $arr[$i] = $arr[$k];
    $arr[$k] =  $tmp;
}
    
var_dump($arr);
?>