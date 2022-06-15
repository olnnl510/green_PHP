<?php
    // $filep= fopen("C:\Apache24\htdocs\php_y\ch10\lorem.txt", "w");
    $filep= fopen("C:\Apache24\htdocs\php_y\ch10\lorem.txt", "a");

    if(!$filep) {
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다.<br>";

    fputs($filep, "\nJulliet : I love you baby I'm not a monster~");

    // w 모드 : 추가되는것이 아니고 다 날림
    // a 모드 : 추가
    // 개행 : \n
    // 탭 : \t