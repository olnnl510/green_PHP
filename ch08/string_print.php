<?php error_reporting(E_ALL); ini_set("display_errors", 1); ?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    $str = "PHP 웨프로그래밍";
    print "str[0] : " . $str[0] . "<br>";
    print "str[4] : " . $str[4] . $str[5] . $str[6] . "<br>"; // 웨 <- ㅇ ㅜ ㅔ
    print $str . "<br>";

    $str1 = "http://www.php.edu/testurl.html?name=kim&age=28";
    $str2 = parse_url($str1); // 배열로 바꾸면 배열안에것들 뽑아오기 편함
    print "SCHEME : " . $str2["scheme"] . "<br>";
    print "HOST : " . $str2["host"] . "<br>";
    print "PATH : " . $str2["path"] . "<br>";
    //var_dump($str2);

    error_log("test", 3, "./err.log");

    print " query : " . $str2["query"] . "<br>";

    parse_str($str2["query"], $output);
    print "이름 : ";
    print $output["name"];
    print "<br>";
    print "나이 : ";
    print $output["age"];
    print "<br>";
    $sitename = "php웹이즈프리";
    echo substr($sitename, 0, 6) . "<br>";
    echo mb_substr($sitename, 0, 4) . "<br>";
    echo mb_strlen($sitename) . "<br>"; // mb 는 1자는 1자. mb있으면 쓰는게 편함
    printf("나이 %0d, 키 %.2f <br>", 8, 173.1212);

    $date = "2017 1 13";
    sscanf($date, "%d %d %d", $year, $mon, $day); // 문자열에서 값을 뽑아내고 싶을 때. 구분자: 스페이스바, /, _
    print $year . "<br>";
    print $mon . "<br>";
    print $day . "<br>";

    $str4 = "나이는 12살입니다."; // 타입이 달라져도 구분이 됨
    $str5 = "나이는 121212.12살입니다.";
    sscanf($str5, "%s %d", $sss, $decAge);
    
    print $sss . "<br>";
    print $decAge . "<br>";
    
?>    
</body>
</html>
