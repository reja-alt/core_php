<!-- phpinfo — Outputs information about PHP's configuration -->

<?php
    // phpinfo(INFO_ALL);
    // phpinfo(INFO_GENERAL);
    // phpinfo(INFO_CREDITS);
    // phpinfo(INFO_CONFIGURATION);
    // phpinfo(INFO_MODULES);
    // phpinfo(INFO_ENVIRONMENT);
    // phpinfo(INFO_VARIABLES);
    // phpinfo(INFO_LICENSE);

    // phpversion();    //Gets the current PHP version
    // echo 'Current php version is: ' . phpversion();

    // phpcredits();    //Prints out the credits for PHP
    // phpcredits(CREDITS_GENERAL);
    // phpcredits(CREDITS_DOCS);
    // phpcredits(CREDITS_FULLPAGE);
    // phpcredits(CREDITS_GROUP);
    // phpcredits(CREDITS_MODULES);
    // phpcredits(CREDITS_SAPI);


    // ini_get();      //Gets the value of a configuration option
    // echo 'display_errors = ' . ini_get('display_errors') . "\n";
    // echo 'register_globals = ' . ini_get('register_globals') . "\n";
    // echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
    // echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
    // echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));

    // ini_set();       //Sets the value of a configuration option
    echo ini_get('display_errors');

    if (!ini_get('display_errors')) {
        ini_set('display_errors', '1');
    }

    echo ini_get('display_errors');

    // get_loaded_extensions();  //Returns an array with the names of all modules compiled and loaded Predefined Variables
    echo '<pre>';
    print_r(get_loaded_extensions());
    echo '</pre>';
?>
