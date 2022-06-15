<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name, $color, $price) { // 생략해도 앞에 자동으로 public 붙음!
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        public function print_fruit() {
            print "Name : {$this->name}<br>";
            print "color : {$this->color}<br>";
            print "price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $banana = new Fruit("Banana", 500, "yellow");

    $apple->print_fruit();
    $banana->print_fruit();



    // private한 멤버필드에 값 넣는 방법
    // 1. 생성자를 통해서
    // 2. setter 메쏘드 통해서

    // private한 멤버필드에서 값 빼는 방법 (객체안에 들어가있는 값 외부로 빼내는 방법)
    // 1. getter 메쏘드를 통해서


    // 오버로딩 : 똑같은 이름의 함수를 여러개 만드는 기법