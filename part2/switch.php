<?php
    // The switch statement is similar to a series of IF statements on the same expression. 
    // In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    
    $day = 6;

    switch($day) {
        case 3:
            echo 'Monday';
            break;
        case 4:
            echo 'Tuesday';
            break;
        case 5:
            echo 'Wednesday';
            break;
        case 6:
            echo 'Thrusday';
            break;
        case 7:
            echo 'Friday';
            break;
    }

// The default is an optional statement. Even it is not important, that default must always be the last statement.
    // There can be only one default in a switch statement. More than one default may lead to a Fatal error.
    // Each case can have a break statement, which is used to terminate the sequence of statement.
    // The break statement is optional to use in switch. If break is not used, all the statements will execute after finding matched case value.
    // PHP allows you to use number, character, string, as well as functions in switch expression.
    // Nesting of switch statements is allowed, but it makes the program more complex and less readable.
    // You can use semicolon (;) instead of colon (:). It will not generate any error.
?>