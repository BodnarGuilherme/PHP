<?php

for($i = 0; $i < 1000; $i++ ){
    if($i % 3 == 0 and $i % 7 ==0){
        echo $i;
    }
}

##--------------------------------------------------------------------------------------------------------------
$n1 = 0;
$n2 = 0;
$n3 = 0;
$n4 = 0;

if($n1 < $n2 and $n1 < $n3 and $n1 < $n4){
    echo $n1 . " Menor.\n";
}else if($n2 < $n3 and $n2 < $n4){
    echo $n2 . " 2 Menor.\n";
}else if($n3 < $n4){
    echo $n3 . " 3 Menor.\n";
}else{
    echo $n4 . " 4 Menor.\n";
}

if($n1 < $n2 and $n1 < $n3 and $n1 < $n4){
    echo $n1 . " Menor.\n";
}else if($n2 < $n3 and $n2 < $n4){
    echo $n2 . " 2 Menor.\n";
}else if($n3 < $n4){
    echo $n3 . " 3 Menor.\n";
}else{
    echo $n4 . " 4 Menor.\n";
}