<?php 
    // prints odd numbers
    // for($i = 0; $i <= 100; $i+=2) {
    //     echo $i. '<br>';
    // }

    //print even numbers
    //  for($i = 1; $i <= 100; $i+=2) {
    //     echo $i. '<br>';
    // }


    $url_feeds = array(
                        '0' => array('user_id' => '1','feed' => 'http://feeds.abcnews.com/abcnews/topstories'),
                        '1' => array('user_id' => '2','feed' => 'http://feeds.reuters.com/reuters/MostRead')
                    );
    // echo $url_feeds[0]['feed'];
    // echo sizeof($url_feeds);
    // echo count($url_feeds);

    // for($i = 0; $i <= sizeof($url_feeds); $i++) {
    //     $user_id = $url_feeds[$i]['user_id'];
    //     // echo $user_id;

    //     $feed = $url_feeds[$i]['feed'];
    //     // echo $feed;
    // }

    //nested for loop

    // for($a = 0; $a <= 10; $a++) {
    //     for($b = 0; $b <= 5; $b++) {
    //         echo "a = $a , b = $b" ."<br>";
    //     }
    // }

    //This function returns a random Array (one Array with two nested Arrays with random values):

    // function ArrCreate() {
    //     $n = 2;
    //     $newArray = [];

    //     for($i = 0; $i < $n; $i++) {
    //         $newArray[$i] = [];
    //         for ($j = 0; $j < $n; $j++) {
    //             $newArray[$i][$j] = mt_rand(1, 2); //Random values declaration.
    //         }
    //     }

    //     return $newArray;
    // }
    
    //This function returns SUM of an Array values (simple FOR loop is used):
    // function arrSum($arr) {

    //     $sum = 0;

    //     for($i = 0; $i < count($arr); $i++) {
    //         for ($j = 0; $j < count($arr); $j++) {
    //            $sum += $arr[$i][$j];
    //         }
    //     }

    //     return $sum;
    // }

    
    //Let's declare the random Array using $arr variable:
    // $arr = ArrCreate();

    //Let's print the random Array using ArrCreate function:
    // echo '<pre>';
    // print_r(ArrCreate());
    // echo '</pre>';
    
    // echo "Sum of an array values: " .arrSum($arr);

    //time update

    // $time = strtotime(date('H:i'));
    // $trounds= 15;
    // echo $time;

    // for($j = 1; $j<= $trounds ; $j++){
    //     echo $time += date("H:i:s", strtotime("+10 minutes", $time));
    //     echo date('H:i:s',$time);
    //     echo '</br>';
    // }

    $pv_numbers = array();


    $a=100;//these numbers are just examples, the variables are obtained from some code
    $b=5;
    $c=10;
    
    for( $d = 0; $d<=($a/$b); $d++ ) {   
        $f=(($a-($d*$c))/$b)  ;       
   
       // $pv_numbers[] = $f;        
       if ($f>=0) {
           $pv_numbers[] = $f;
           continue;
   
   
       }
     }
   
   echo "<pre>";
   print_r($pv_numbers);
   echo "</pre>";
?>