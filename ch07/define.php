<?php
    define("NAME", "홍길동"); // 상수. 네이밍 대문자로!
    define("NAME2", "장보고");
    define("STAND_AGE", 25);

    //상수 const vs 리터럴 literal

    print NAME; // 상수 호출시 앞에 달러 안붙여도됨.
    print NAME2;
    print STAND_AGE;
    print "-----------<br>";
    function fn1() {
        print "fn1 : " . NAME . "<br>"; // 상수 선언시. 함수안에서도 global 없이 사용 가능.
    }

    function fn2() {
        define("TEST", "테스트"); // 함수안에서 상수선언 가능. 밖에서 호출 가능.
    }

    fn1();
    fn2();
    print TEST . "<br>";
?>

<!--
상수 : 한번 값 입력되면 수정 불가
상수 : 대문자로 쓰자. 구분은 언더바로

- 상수 const vs 리터럴 literal 차이점
STAND_AGE : 상수. 값이 한번 입력되면 그 후로 바꿀수 없는것.
25 : 리터럴. 값 그 자체

define 상수설정. 화면 제일 위에서 하는걸로.
-->