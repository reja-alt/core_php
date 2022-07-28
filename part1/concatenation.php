<?php 

    //. and = opearator are used to concate  
    $firstName = "reja";
    $lastName = "khan";

    $full_name = $firstName . ' ' . $lastName;
    echo $full_name . '<br>';

    // $person = ["reja", "nahid", "hasan"];

    // foreach($person as $item) {
    //     $greeting = 'Hi ';
    //     $greeting .= $item;
    //     echo $greeting . '<br>';
    // }

    // $main_strings = ['Do you want to apples?', 'Can we have to mangoes?'];

    // $index = 14;
    // foreach( $main_strings as $string) { 
    //     $text = substr($string, 0, 14) . ' eat' . substr($string, 14);
    //     echo $text;
    // }

    $main_strings = ['Do you like apples?', 'They told me that they like apples very much.'];

    foreach($main_strings as $string) {
        $index = strpos($string, 'apples');
        echo $index;
        $text = substr($string, 0, $index) . 'eating '. substr($string, $index);
        echo $text;
    }
?>