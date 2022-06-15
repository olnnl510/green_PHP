<?php
    $data = file("./major.txt");

    print_r($data);

print "<br>--------------------<br>";

foreach($data as $line) {
    $div = explode(" ", $line); // 나눌때 기준 " ", $line에 들어있다.
    // print $line . "<br>";
    // print $div[0] . ", " . $div[1] . "<br>";
    print "Name: {$div[0]} Major: {$div[1]} <br>";
}