<?php 
    // variables

    /* starts with $ sign,must start with a letter or the underscore character, cannot start with a number,case-sensitive */

    // $demo test = "text"; // error
    // $2name = "reja";  //error
    $_firstName = "adnan"; //ok

   //You can even add more Dollar Signs

    // $Bar = "a";
    // $Foo = "Bar";
    // $World = "Foo";
    // $Hello = "World";
    // $a = "Hello";

    // $a; //Returns Hello
    // $$a; //Returns World
    // $$$a; //Returns Foo
    // $$$$a; //Returns Bar
    // $$$$$a; //Returns a

    // $$$$$$a; //Returns Hello
    // $$$$$$$a; //Returns World

    // data types
    // Integers
    // Doubles
    // NULL
    // Strings
    // Booleans
    // Arrays
    // Objects
    // Resources

    // Variable Scopes
    /* 1.local variables 2.global variables 3.static variables

    //Local Variables
    /* The variables declared within a function are called local variables to that function and have their scope only in that particular function 
    The variables declared outside a function are called global variables. These variables can be accessed directly outside a function
    */

    $num =5;  //global 

    function show() {
        $age = 28; //local
        echo $age;
        // echo $num; //error
    }
    // echo $num;
    // echo $age;  //error
    show();

    //static
    function static_var()
    {  
        // static variable
        static $num = 5;
        $sum = 2;
        
        $sum++;
        $num++;
        
        echo $num, "\n";
        echo $sum, "\n";
    }
    
    // first function call
    static_var();
    
    // second function call
    static_var();
?>