<?php

function A()
{
    global $n;
    print $n . "<br>";
    return; // A를 호출한 곳으로 돌아감
}

function B()
{
    A(); // 함수 안에서 함수 호출한 것.
    $n = "B"; // 전역변수와 다른 $n 에 B를 담은 것.
    return; // B를 호출한 곳으로 돌아감
}

$n = "M";
A();
B();

?>

<!--
M
M
-->