<?php
// Your code here!

$ar = [];

for ($i = 0 ; $i < 10 ; $i++){
    $ar[] = rand(0,100);
}

foreach ($ar as $a){
    print $a.",";
}
print PHP_EOL;

$ar = bubble_sort($ar);

foreach ($ar as $a){
    print $a.",";
}
print PHP_EOL;

function bubble_sort($array){
    $len = count($array);
    for($j=0;$j<$len-1;$j++){
        for($i=0;$i<$len-1-$j;$i++){
            if($array[$i] > $array[$i+1]){
                $tmp = $array[$i];
                $array[$i] =$array[$i+1];
                $array[$i+1] = $tmp;
            }
        }
    }
    return $array;
}
