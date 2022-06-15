<?php
// exam6.txt 파일 읽어서 전부 대문자로 변경한 후
// exam6_capital.txt 에 저장해 주세요.

$filep= fopen("./exam6.txt", "r");

if(!$filep) { // true의 반대 false
    die("파일을 열 수 없습니다.");
}
print "파일을 열었습니다.<br>";

// $filep2= fopen("./exam6.txt", "r+"); // r+ 읽고쓰기
$filep2= fopen("./exam6_capital.txt", "w");

while($line = fgets($filep, 1024)) { // 한줄 길이
    fputs($filep2, strtoupper($line));
}
fclose($filep);
fclose($filep2);

// thanks to 황현님