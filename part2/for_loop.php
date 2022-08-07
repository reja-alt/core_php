<?php 
    // This type of loops is used when the user knows in advance,how many times the block needs to execute. 
    // That is, the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops. 
    // There are three main parameters to the code, namely the initialization, the test condition and the counter.

    // for (initialization expression; test condition; update expression) {
    //     // code to be executed
    // }

    // for($i = 0; $i <= 10; $i++) {
    //     echo $i;
    // }

       /* example 1 */  
  
       for ($i = 1; $i <= 9; $i++) {  
        echo $i;  
        }  
        echo "</br>";  
          
        /* example 2 */  
      
        for ($i = 1; ; $i++) {  
            if ($i > 9) {  
                break;  
            }  
            echo $i;  
        }  
        echo "</br>";  
          
        /* example 3 */  
      
        $i = 1;  
        for (; ; ) {  
            if ($i > 9) {  
                break;  
            }  
            echo $i;  
            $i++;  
        }  
        echo "</br>";  
          
        /* example 4 */  
      
        for ($i = 1, $j = 0; $i <= 9; $j += $i, print $i, $i++);  
?>