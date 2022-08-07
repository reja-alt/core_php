<?php
    // do-while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning. 
    // $counter = 1;

    // do{
    //     echo "print number";
    //     $counter++;
    // } while($counter < 10)

    do {
        if ($i < 5) {
            echo "i is not big enough";
            break;
        }
        $i *= $factor;
        if ($i < $minimum_limit) {
            break;
        }
       echo "i is ok";
    
        /* process i */
    
    } while (0);
?>