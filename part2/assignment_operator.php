<?php 
    // The basic assignment operator is "=". Your first inclination might be to think of this as "equal to". 
    //Don't. It really means that the left operand gets set to the value of the expression on the right (that is, "gets set to")

    $a = 20;
    $a += 30;
    echo $a .'<br>';

    $full_name = "reja ";
    $full_name .= "khan";

    echo $full_name;

    // Assigning by reference

    // Assignment by reference is also supported, using the "$var = &$othervar;" syntax.
    // Assignment by reference means that both variables end up pointing at the same data, and nothing is copied anywhere

    $x = 40;
    $y = &$x;

    echo $x;
    echo $y;

    $x= 457;

    echo $x;  //value of x changed
    echo $y;  //also y value changed as x points to y
?>