<?php
    // $filep= fopen("./lorem.txt", "r");
    $filep= fopen("C:\Apache24\htdocs\php_y\ch10\lorem.txt", "r");

    if(!$filep) { // true의 반대 false
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다.<br>";

    while($line = fgets($filep, 1024)) { // 한줄 길이
        print $line . "<br>";
    }
    fclose($filep);