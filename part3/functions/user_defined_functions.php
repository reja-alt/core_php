<?php
function fooDemo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Example function.\n";
    return $retval;
}
?>
<!-- Any valid PHP code may appear inside a function, even other functions and class definitions. -->

<?php
    $makeFoo = true;

    bar();

    // foo();  //error

    if($makeFoo) {
        function foo() {
            echo 'Now i can run';
        }
    }

    if($makeFoo) foo();  //Now it will run as  $makeFoo = true;

    function bar() {
        echo 'i exist when the program start';
    }
?>

<!-- function within function -->
<?php
    function basic() {
        function inside() {
            echo 'inside function';
        }
    }

    // inside(); //error as it doesnt exists while we not call basic

    basic();
    inside(); //now it is accessable
?>

<!-- All functions and classes in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.
 -->