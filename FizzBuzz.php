<?php

for($i=1;$i<=100;$i++){
    FizzBuzz($i);
}

function FizzBuzz($i){
    if($i % 15 == 0){
        print "FizzBuzz".PHP_EOL;
        return 0;
    }elseif($i % 5 == 0){
        print "Buzz".PHP_EOL;
        return 0;
    }elseif($i % 3 == 0){
        print "Fizz".PHP_EOL;
        return 0;
    }else{
        print $i.PHP_EOL;
        return 0;
    }
}
