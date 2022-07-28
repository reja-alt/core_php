<?php
    // error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    // ini_set('error_reporting', 'E_ALL & ~E_WARNING & ~E_NOTICE');  //can also set like this

    // error_reporting — Sets which PHP errors are reported

    // $age = 28  //if  change error_reporting = 0 instead of E_ALL & ~E_DEPRECATED & ~E_STRICT in php.ini then no error will be shown
    // $address = "dhaks"

    // die("something bad happened!");
    // var_dump(error_reporting(E_ALL));

    // trigger_error("something bad happened", E_USER_ERROR);

    // Types of error

    /* parse or syntax errors
    They simply mean there are one or more incorrect symbols in your script. Maybe you’ve missed a semi-colon or misplaced a bracket */ 

    // $age = 25;

    // if ($age >= 18 {
    //     echo 'Of Age';
    // } else {
    //     echo 'Minor';
    // }

    // fatal errors

    /* the reason for fatal errors is an undefined class, function, or another artifact. If a script tries to use a function that doesn’t exist */

    // function add($a, $b)
    // {
    //     return $a + $b;
    // }

    // echo '2 + 2 is ' . sum(2, 2);

    // warning errors

    /* Warning errors are errors that don’t result in script termination
    warning in PHP usually represents something that’s not yet a full-blown problem—or at least not a critical one—but it might become a serious issue in the future */
    
    $components = parse_url();
    var_dump($components);

    // notice errors

   /*  Notice errors are similar to warnings in that they also don’t halt script execution
    notices are usually considered less critical or less intense than warnings */

    $numbers = "1,2,5,6";
    $parts = explode(",", $integers);

    echo 'The first number is ' . $parts[0];


?>