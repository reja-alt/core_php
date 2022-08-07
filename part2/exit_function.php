<?php 
    // The exit() function in PHP is an inbuilt function which is used to output a message and terminate the current script.
    // The exit() function only terminates the execution of the script. The shutdown functions and object destructors will always be executed even if exit() function is called.
    // The message to be displayed is passed as a parameter to the exit() function and it terminates the script and displays the message.
    // The exit() function is an alias of the die() function.
    echo 'Welcome';
    die('stop');

    $s = 300;
    $v = 300.1;

    if($s===$v){
        exit('The two are equal');
    }else{
        exit ('The two are not equal');
    }
?>