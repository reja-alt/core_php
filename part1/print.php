<!-- print — Output a string -->
<!-- print is not a function but a language construct. Its argument is the expression following the print keyword, and is not delimited by parentheses. -->

<!-- The major differences to echo are that print only accepts a single argument and always returns 1. -->

<?php
    echo "demo", "test";  //will work
    print "demo";   //will work
    // print  "demo", "test";  //will not work, show error, cause multiple arguments are not allowed
?>