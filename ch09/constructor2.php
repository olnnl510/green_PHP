<?php
class Fruit
{
    private $name; // 멤버필드. 객체 class 안에서 메쏘드 아닌애들. (변수, 상수)
    private $color; // 멤버필드
    private $price; // 멤버필드
    public const DDD = 'ddd';

    // function __construct() {
    //     return $this;
    // }

    public function print_fruit()
    {
        print "Name : {$this->name}<br>";
        print "color : {$this->color}<br>";
        print "price : {$this->price}<br>";
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

$apple1 = (new Fruit())->setName("사과");
$apple1->print_fruit();

$apple2 = (new Fruit())
    ->setColor("파란")
    ->setPrice((1000));

$apple2->print_fruit();

$banana1 = new Fruit;
$banana1->setName("개나리노란꽃그늘안에가지런히놓여있는꼬까신하나")->setColor("노란")->setPrice(2000);
$banana1->print_fruit();


// 빌더패턴 : 내가 원하는 값만 넣어서 객체생성.
// return this 있는 이유.

// 멤버필드(변수, 상수)
// 클래스(설계도. 문서일 뿐. 객체가된다면, 값을 저장할수있고 등등등)