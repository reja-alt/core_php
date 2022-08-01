<!-- <?php 
    $day = date('D');
    
    if($day == 'Fri') {
        echo 'Weekday';
    } elseif($day == 'Thrs') {
        echo 'Weekend';
    } elseif($day == 'Sun') {
        echo 'First day';
    }
    else {
        echo 'fatal';
    }
?> -->

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

    </style>
</head>
<body>
    <!--HTML CODES-->
    <form method="POST"> 
        <h1>Result-Checker</h1>

        <h3>Enter Your Marks</h3>
   
        <div><input type="text" name="inp1"></div> <br>
         
        <div>
        <button name="submit" type="submit" value="submit">
        <h4>REsult</h4>
           </button>
        </div><br>
    </form>

    <?php
        $error = 'wrong marks';

        if(isset($_POST['submit'])) {
            $number = $_POST['inp1'];
        
            if($number < 33 && $number > -1) {
                $result = 'F';
            } elseif ($number > 32 && $number < 40) {
                $result = 'D';
            } elseif ($number > 39 && $number < 50) {
                $result = 'C';
            } elseif ($number > 49 && $number < 60) {
                $result = 'B';
            } elseif ($number > 59 && $number < 70) {
                $result = 'A';
            } elseif ($number > 69 && $number < 100) {
                $result = 'A+';
            } else {
                $result = $error;
            }
        }
    ?>

    <h1 class="result">
        <?php
            if(isset($result)) {
                echo 'You got ' . $result;
            }
        ?>
    </h1>

    <form>
        <div class="form-group">
            <label for="input"> Input number </label>
            <input id="input" name="input" class="form-control" type="text">
        </div>
        <button type="submit">Submit</button>
    </form>

    <?php 
        $input= $_GET["input"];
        for($x = 1; $x <= $input; $x++) {
            if($x % 5 == 0 && $x % 3 == 0) {
                echo 'ping pong';
            } elseif($x % 5 == 0) {
                echo 'ping';
            } elseif($x % 3 == 0) {
                echo 'pong';
            }
        } 
    ?> 
</body>
</html>
