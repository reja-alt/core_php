<!-- <?php
    $name = "reja";
?> -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" value="<?php echo $name ?>">
</body>
</html> -->

<?php
    $array = array(1, 2, 3, 4);
?>

<table>
    <thead>
        <tr>
            <th>Number</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($array as $item) :?>
        <tr>
            <td><?= htmlspecialchars($item) ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>