<?php
    $x = 10;

    foreach($GLOBALS as $key => $var)
    {
        print $key . " : ";
        print_r($var);
        print "<br>";
    }

    $arr = [];
    print_r($arr);
?>



<!--
    print 문자열 (객체는 못 찍음)
    print_r 객체
-->