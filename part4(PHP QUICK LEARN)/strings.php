<?php 
    $string = "    Welcome     ";
    $demo_text = "Where you can find next future";
    echo strlen($string) .'<br>';
    echo trim($string) .'<br>';
    echo ltrim($string) . '<br>';
    echo rtrim($string) . '<br>';
    echo ucfirst('hi') . '<br>';
    echo lcfirst('Hi') . '<br>';
    echo str_word_count('Hi nexum in the ') . '<br>';
    echo strpos($demo_text, 'find') . '<br>';
    echo stripos($demo_text, 'future') . '<br>';
    echo substr($demo_text, 2, 6) . '<br>';
    echo str_replace('find', 'found', $demo_text) . '<br>';
    echo str_ireplace('find', 'found', $demo_text) . '<br>';
    echo str_repeat('hi ', 7);

    $longText = "
    Hello, my name is Zura
    I am 27,
    I love my daughter
    ";
    // echo $longText . '<br>';
    // echo nl2br($longText) . '<br>' . PHP_EOL;

    $longText1 = "
    Hello, my name is <b>Zura</b>
    I am <b>27</b>,
    I love my daughter
    ";
    echo $longText1 . '<br>';

    echo htmlentities($longText1) . '<br>';
    echo html_entity_decode(htmlentities($longText1)) . '<br>';
    echo htmlspecialchars($longText1);

  $number = 57;

  echo str_pad($number, 8, 1, STR_PAD_LEFT);

    ?>