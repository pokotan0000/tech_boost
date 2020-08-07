<?php

function sum($max){
    
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        
        $result += $i;
    }
    
    return $result;
}

echo sum(100);


// 1から100までを順番に表示する関数
function print_number(){

    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}

echo print_number(100);