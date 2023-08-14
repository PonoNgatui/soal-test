<?php
    $i = 13;
    $a =0;
    for($j=1;$j<=$i;$j++){
        if($i % $j == 0){
            $a++;
        }
    }
    if($a == 2){
        echo $i.' adalah bilangan prima';
    }
    else{
        echo $i.' bukan bilangan prima';
    }
    
?>