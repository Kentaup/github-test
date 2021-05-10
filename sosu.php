<?php
// Your code here!


for($i=1; $i<=1000; $i++){
    $frag = 0;
    for($j = 2; $j <= $i/2; $j++){
        if($i%$j == 0){
            $frag = 1;
            break;
        }
    }
    if($frag == 0)print $i .PHP_EOL ;

}

?>
