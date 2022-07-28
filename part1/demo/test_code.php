<?php 
    // Concatenation

    // $name = "reja";
    // $full_name = $name . 'khan';

    // $age = 'Your age is :';
    // $age .= 28;
    

    // $fruits = 'DO you wanna eat ?';
    // $fruits .= 'mango';
    // $fruits .= 'What is your name?';
    // $fruits .= 'My name is : ';
    // $fruits .= $name;

    // $demo = "demo test";

    // $sentence = "no reason of {$demo} test";
    // echo $sentence;

    // echo $fruits;
    // echo $age;
    // echo $full_name;

    // function Add($string) {
    //     $arr = ["reja", "rafi", "adnan"];

    //     foreach($arr as $item) {
    //         $string  .= ' ' . $item;
    //     }
    //     return $string;
    // }
    // echo Add('afnan');


    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embeded php inside html</title>
</head>
<body>
    <!-- <?php
        $employees = ["lotus", "afnan", "adnan"];
        $total = count($employees);
        echo $total;
    ?>
    <h1>List of employees</h1>
    <ul>
        <?php $i = 0 ?>
            <?php while($i < $total) { ?>
                <li><?php echo $employees[$i] ?></li>
                <?php ++$i ?>
            <?php }  ?>
    </ul> -->

    <?php
    if(isset($_POST['submit'])) {
        $name = $_POST['subject'];
        $message = $_POST['message'];

        echo $name . '<br>';
        echo $message;
    }
      
    ?>

    <?php
        include('../variable.php') ;
        echo $_firstName;
    ?>
    <form method="post">
        <input name="subject" />
        <textarea name="message"></textarea>
        <button type="submit" value="submt" name="submit">Send</button>
    </form>
    <h1><?php if(isset($name)) echo $name  ?></h1>
    <h1><?php if(isset($message)) echo $message ?></h1>
    <h1><?php if(isset($_firstName)) echo $_firstName ?></h1>

    <!-- html inside php -->
    <?php 
        echo '<h1>Welcome</h1>';
        echo '<table>
                <tr>
                    <td>Name:</td>
                    <td>Age:</td>
                    <td>Address:</td>
                </tr>
            </table>';
    ?>
</html>
</body>
</html>

<?php
//Error reporting code

?>