<!-- echo — Output one or more strings, numbers, variables, values, and results of expressions-->
<!-- echo is not a function but a language construct -->

<?php
    echo    '<table>
                <tr>
                    <td>Name:</td>
                    <td>Age:</td>
                    <td>Address:</td>
                </tr>
            </table>';

    // Strings can either be passed individually as multiple arguments or
    // concatenated together and passed as a single argument
    echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "<br>";
    echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "<br>";

    $fruits = ['apple', 'banana', 'orange'];
    echo implode(' and ', $fruits);
?>