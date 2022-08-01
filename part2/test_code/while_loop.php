<?php
    $x = 1;

    while($x <= 10) {
        echo "Welcome";
        $x++;
    }

    //sum between 0 and 100
    
    $number = 0;
    $sum = 0;

    while($number <= 100) {
        $sum += $number;
        $number++;
    }
    echo "The sum is : $sum";
?>