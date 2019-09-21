<?php

//課題1

$name = "菅野";

if($name == "菅野"){
    echo "私は菅野です";
}else{
    echo "菅野ではありません。";
}

echo "\n";


//課題2

$total = 0;

for($i = 0; $i <= 10000; $i++){
    $total += $i;
}

echo $total;
echo "\n";


//課題3

$fruits = ["apple","orange","banana","grape","peach"];

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}


//課題4

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}