<?php
    function dataValidation($year, $month, $day) {
        $currentYear = date("Y");
        
        if($year >= 1900 && $year <= $currentYear && $month <= 12 && $month > 0 && $day > 0 && $day <= 31 ) {
            return true;
        } else {
            return 'ERROR';
        }
    }

    echo dataValidation(2016, 19, 23);
?>