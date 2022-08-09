<?php
    // The preg_match() function is a built-in function of PHP that performs a regular expression match.
    // This function searches the string for pattern, and returns true if the pattern exists otherwise returns false.
    // Syntax : int preg_match( $pattern, $input, $matches, $flags, $offset )
    
    $string = "Chcek matching expression";

    if(preg_match('/matching/', $string)) {
        echo 'match found';
    } else {
        echo 'match not found';
    }


    // Declare a variable and initialize it
    $geeks = 'GeeksforGeeks';
    
    // Use preg_match() function to check match
    preg_match('/(Geeks)(for)(Geeks)/', $geeks, $matches, PREG_OFFSET_CAPTURE);
    
    // Display matches result
    echo '<pre>';
    print_r($matches);
    echo '</pre>';
?>