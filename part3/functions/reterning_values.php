<?php
    // Values are returned by using the optional return statement. Any type may be returned, including arrays and objects.

    function square($num) {
        return $num * $num;
    }

    echo square(5);

    // A function can not return multiple values, but similar results can be obtained by returning an array.

    function small_numbers()
    {
        return [0, 1, 2];
    }
    // Array destructuring will collect each member of the array individually
    [$zero, $one, $two] = small_numbers();

    // Prior to 7.1.0, the only equivalent alternative is using list() construct
    list($zero, $one, $two) = small_numbers();

    // To return a reference from a function, use the reference operator & in both the function declaration and when assigning the returned value to a variable:

    function &returnReferences() {
        return $something;
    }
    $newObject = &returnReferences()
?>