<?php
    $filep = fopen("./logfile.txt", "a"); // a : 추가
    if(!$filep) { die("파일을 열 수 없습니다."); }

    $now = date("Y-F-d H:i:s", time());
    fputs($filep, $now . "\n");
    fclose($filep);

    print "Connect Service";