<?php

class Animal {
    function crying() {
        print "동물이 운다. <br>";
    }
}

class Dog extends Animal {
    function crying() {
        print "강아지가 멍멍. <br>";
    }
}

class Chiwawa extends Dog {
    function crying() {
        print "치와와가 왕왕 <br>";
    }
}

class Cat extends Animal {
    function crying() {
        print " 고양이가 야옹~<br>";
    }
}

Class Human {
    function speak() {
        print "사람이 말하다!!";
    }
}

function doCry($ani) { //컨버팅
    if(method_exists($ani, "crying")) {
        $ani->crying();
    } else {
        print "crying 메소드 없음!";
    }
}

doCry(new Chiwawa);
doCry(new cat);
doCry(new Dog);
doCry(new Animal);
doCry(new Human);


// 오버라이딩은 무조건 의도한거임