<?php

//課題1

function double($i){
    $result = $i * 2;
    return $result;
}

echo double(20);
echo "\n";


//課題2

function add($a, $b){
    $result = $a + $b;
    return $result;
}

echo add(25, 50);
echo "\n";


//課題3

$array = [1,3,5,7,9];

function add_array($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a; 
    }
    return $result;
}

echo add_array($array);
echo "\n";


//課題4

$array = [51,25,80,7,9];

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array($array);
echo "\n";


//課題5


echo "----------------------";
echo "\n";


    //strip_tags
    
    $br = "テスト<br>テスト";
    echo $br;
    echo "\n";
    
    echo strip_tags($br);
    echo "\n";


echo "----------------------";
echo "\n";


    //array_push
    
    $fruits = ["apple","orange","banana"];
    
    array_push($fruits,"grape","peach");
    
    print_r($fruits);
    
echo "----------------------";
echo "\n";
    

    //array_merge
    
    $fruits = ["apple","orange","banana"];
    $animals = ["monky","sheep","lion"];
    
    $merge = array_merge($fruits,$animals);
    
    print_r($merge);
    
    
echo "----------------------";
echo "\n";  


    //time,mktime,date
    
    echo time();
    echo "\n";
    
    echo mktime(9,0,0,4,19,1979);
    echo "\n";
    
    echo date('Y-m-d H:i:s', 293360400);
    echo "\n";
    