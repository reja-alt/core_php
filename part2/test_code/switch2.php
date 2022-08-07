<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogo-Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">
    
    <!--CSS CODES-->
    <style>
          h1{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              letter-spacing: 5px;
              color: #1B1464;
          }
          h3{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              color: #EA2027;
              letter-spacing: 2px;
              margin: 0;
          }
          input{
              text-align: center;
          }
          div{
              text-align: center;
          }
          h4{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              color: #009432;
              letter-spacing: 2px;
              margin: 0;
              font-size: 20px;
          }
          button{
              width: 100px;
              height: 34px;
          }
          .result{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              letter-spacing: 5px;
              color: #12CBC4;
              font-size: 100px;
              margin: 0;
          }
          select{
              width: 100px;
              height: 30px;
          }
          option{
              color: #009432;
          }

    </style>
</head>
<body>
    <!--PHP CODES-->
    <?php

    $result="Enter Value";

    if (isset($_GET["submit"])) {
        $num1=$_GET["inp1"];
        $num2=$_GET["inp2"];
        $opr=$_GET["Operator"];

        switch ($opr) {
            case 'Add(+)':
                $result = $num1 + $num2;
                break;

            case 'Subtract(-)':
                $result = $num1 - $num2;
                break;

            case 'Multiply(*)':
                $result = $num1 * $num2;
                break;

            case 'Devide(/)':
                $result = $num1 / $num2;
                break;

            default:
                $result="Enter Value";
                break;
        }
    }
    
     ?>
    <!--HTML CODES-->
    <form>
        <h1>Result-Checker</h1>

        <h3>Enter First Number</h3>
   
        <div><input type="text" name="inp1" value='<?php echo $num1 ?>'></div> <br>

        <h3>Enter Second Number</h3>
   
        <div><input type="text" name="inp2" value='<?php echo $num2 ?>'> </div> <br>

        <h3>Select Operator</h3>
         
        <div>
         <select name="Operator">
             <Option>Add(+)</Option>
             <Option>Subtract(-)</Option>
             <Option>Multiply(*)</Option>
             <Option>Devide(/)</Option>
         </select>

        <button name="submit" type="submit" value="submit">
        <h4>REsult</h4>
           </button>
        </div><br>
   
    </form>
     
     <h1 class="result">
         <?php
         echo $result;
         ?>
     </h1>
</body>
</html>