<?php 
    function whatIsToday() {
        echo "Today is " . date('l', mktime()) . '<br>';
    }

    whatIsToday();

    function getSum($num1, $num2) {
        $result = $num1 + $num2;
        return 'Result is : ' . $result;
    }

    echo getSum(56,54);
?>