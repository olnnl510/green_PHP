<?php

class Clac {
    function sum($n1, $n2) {
        return $n1 + $n2;
    }
}

// Calc를 객체화. 변수명은 c
// sum 메소드를 호출. 5, 10을 더한 값을 리턴받고 화면에 출력하시오.

$c = new Clac(); // 주소값 = 객체화. "객체화"해서 어떠한 주소값에 담아둔다. (메모리에 올려야함)
$result = $c->sum(5, 10) . "<br>"; // 주소값->sum메소드호출(5,10)
print "result : " . $result . "<br>";

class StaticCalc {
    static function sum($n1, $n2) {
        return $n1 + $n2;
    }
}

// static 이 붙으면 ? 메모리에 먼저 올라갔다.
// instance와 상관없다. (new와 상관없다.)

$result = StaticCalc::sum(10, 11);
print "result : " . $result . "<br>";





// 객체마다 다른값을 가졌으면 좋겠다 = static 붙이면 안된다