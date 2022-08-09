<!-- PHP supports passing arguments by value (the default), passing by reference, and default argument values.
Variable-length argument lists and Named Arguments are also supported. -->

<?php
    function takesArray($array) {
        if(!is_array($array)) {
            die('Not an array');
        }  
        echo $array[0] + $array[1];
    }

    $array = [43,65,87,54];
    
    takesArray($array);

    // Function Argument List with trailing Comma

    function takesManyArguments(
        $first_arg,
        $second_arg,
        $default
    ) 
    {

    }

    // Passing function parameters by reference
    function add_some_extra(&$string)
    {
        $string .= 'and something extra.';
    }
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str;    // outputs 'This is a string, and something extra.'

    // Use of default parameters in functions

    // function makecoffee($type = "cappuccino")
    // {
    //     return "Making a cup of $type.\n";
    // }
    // echo makecoffee();
    // echo makecoffee(null);
    // echo makecoffee("espresso");

    // Default parameter values may be scalar values, arrays, the special type null, and as of PHP 8.1.0, objects using the new ClassName() syntax.

    // Using non-scalar types as default values

    // function makecoffee1($types = array("cappuccino"), $coffeeMaker = NULL)
    // {
    //     $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    //     return "Making a cup of ".join(", ", $types)." with $device.\n";
    // }
    // echo makecoffee1();
    // echo makecoffee1(array("cappuccino", "lavazza"), "teapot");

    // // Using objects as default values (as of PHP 8.1.0)

    // class DefaultCoffeeMaker {
    //     public function brew() {
    //         return 'Making coffee.';
    //     }
    // }
    // class FancyCoffeeMaker {
    //     public function brew() {
    //         return 'Crafting a beautiful coffee just for you.';
    //     }
    // }
    // function makecoffee2($coffeeMaker = new DefaultCoffeeMaker)
    // {
    //     return $coffeeMaker->brew();
    // }
    // echo makecoffee2();
    // echo makecoffee2(new FancyCoffeeMaker);

    // Variable-length argument lists 

    // Argument lists may include the ... token to denote that the function accepts a variable number of arguments. The arguments will be passed into the given variable as an array; for example:
    
    // function sum(...$numbers) {
    //     $acc = 0;

    //     foreach($numbers as $number) {
    //         $acc += $number;
    //     }
    //     return $acc;
    // }

    // echo sum(45,65,76,54);

    // Named argument syntax

    // myFunction1(paramName: $value);
    // array_foobar(array: $value);

    // NOT supported.
    // function_name($variableStoringParamName: $value);
?>
