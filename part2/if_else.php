<?php 
// PHP if statement allows conditional execution of code. It is executed if condition is true.
// If statement is used to executes the block of code exist inside the if statement only if the specified condition is true.

$numbers = 19;
if($numbers < 100) {
    echo "Number is less than 100";
} else {
    echo "Number is greater than 100";
}

// If-else-if Statement
// we can check multiple conditions using this statement

$marks = 81;
if($marks < 33) {
    echo 'Fail';
} elseif($marks > 33 && $marks < 40) {
    echo 'D grade';
} elseif($marks > 40 && $marks < 50) {
    echo 'C grade';
} elseif($marks > 50 && $marks < 60) {
    echo 'B grade';
} elseif($marks > 60 && $marks < 70) {
    echo 'A- grade';
} elseif( $marks > 80) {
    echo 'A+';
} else {
    echo 'Invalid';
}

// nested if statement

$nationality = 'Bangladesh';
$age = 28;

if($nationality == 'Bangladesh') {
    if($age < 18) {
        echo '<h1>You are not able to vote</h1>';
    } else {
        echo '<h1>You are able to vote</h1>';
    }
} 

?>