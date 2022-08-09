<?php
    preg_match('/(php)/i', 'PHP IS a language',$match, PREG_OFFSET_CAPTURE);
    echo '<pre>';
    print_r($match);
    echo '</pre>';
?> 