<?php
    // error_reporting — Sets which PHP errors are reported

    // $age = 28  //if  change error_reporting = 0 instead of E_ALL & ~E_DEPRECATED & ~E_STRICT in php.ini then no error will be shown
    // $address = "dhaks"

    // die("something bad happened!");
    // var_dump(error_reporting(E_ALL));

    trigger_error("something bad happened", E_USER_ERROR);
?>