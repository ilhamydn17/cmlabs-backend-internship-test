<?php

    for ($i=1; $i <=100 ; $i++) { 
        if($i % 3 == 0 && $i % 5 == 0){
            echo  $i . " FizzBuzz ";
        }else if($i % 3 == 0){
            echo $i. " Fizz ";
        }else if($i % 5 == 0){
            echo $i . " Buzz ";
        }else{
            echo $i;
        }
        echo "<br>";
    }

?>