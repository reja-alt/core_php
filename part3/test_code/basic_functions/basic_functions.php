<?php
    // $user_ip = $_SERVER['REMOTE_ADDR'];

    // function getIp() {
    //     global $user_ip;
    //     echo 'Your IP address is : ' . $user_ip;
    // }

    // getIp();

    function printValues($species) {
        global $count;
        global $items;

        // Check input is an array
        // if(!is_array($species)){
        //     die("ERROR: Input is not an array");
        // }

        foreach($species as $a) {
            if(is_array($species)) {
                printValues($a);
            } else {
                $items[] = $a;
                $count++;
            }
        }

        return array('total' => $items, 'count' => $count);
    }

    // Define nested array
    $species = ['dog', 'cat', 'cow', 'lion'];
// $species = array(
//     "birds" => array(
//         "Eagle",
//         "Parrot",
//         "Swan"
//     ),
//     "mammals" => array(
//         "Human",
//         "cat" => array(
//             "Lion",
//             "Tiger",
//             "Jaguar"
//         ),
//         "Elephant",
//         "Monkey"
//     ),
//     "reptiles" => array(
//         "snake" => array(
//             "Cobra" => array(
//                 "King Cobra",
//                 "Egyptian cobra"
//             ),
//             "Viper",
//             "Anaconda"
//         ),
//         "Crocodile",
//         "Dinosaur" => array(
//             "T-rex",
//             "Alamosaurus"
//         )
//     )
// );

    $result = printValues($species);
    // echo $result;
?> 