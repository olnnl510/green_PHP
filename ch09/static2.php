<?php

class Computer {
    public static $brand;
    public $price;

    function __construct() {
        $this->init();
    }

    function init() {
        self::$brand = "2";
    }

    static function setBrand($brand) {
        self::$brand = $brand;
    }

    function myPrint() {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다.<br>";
    }

    // static function myStaticPrint() {
    //     print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다.<br>";
    // } // new 해야 사용할 수 있음 (??????????????????????????Q)

}

// self : Computer
// this : 내가 객체화가 됐다면 내 주소

$c = new Computer;
$c->price = 10000;

$c2 = new Computer;
$c2->price = 20000;

$c->myPrint();
$c2->myPrint();

$c->setBrand("Samsung");
$c->myPrint();
$c2->myPrint();