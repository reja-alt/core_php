<?php
    // First, the condition given inside the brackets after the while keyword is checked.
    // If the condition is satisfied or is true, then the control is moved inside the loop.
    // The statements inside the loop are executed.
    // Once all the statements inside the loop are executed, the condition is checked again, and if it is true, the execution continues.
    // When the condition is evaluated to be false, the control will not move inside the loop, and the while loop terminates.
    
    $counter = 1;

    while($counter < 10) {
        echo '<h1>Even</h1>' . '<br>';
        $counter++;
    }

    $value = 10;

    while($value > 5) {
        echo "The value of the field is : $value <br>";
        $value--;
    }
?>