<?php
    // Access Modifier
    // 접근제어 지시자
    // 접근지시어
    // 접근제어자
    // java: private default protected public
    class Student1 { // 클래스명 대문자로 시작!!!!!
        public $cnt = 3;
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";

            // if($this->cnt == 0) {
            //     return;
            // }
            // $this->cnt--;
            // $this->printStudent("111", "222");
        }
    }

    function printStudent($id, $name) {
        print "dddd : {$id}, {$name}";
    }

    // 위의 틀(객체를 만드는 틀. 붕어빵틀) 대로 객체생성 ㄱㄱ
    // new 하면 객체 생성
    // new 클래스명 선택.

    $obj = new Student1; // 객체주소값 리턴된것 담아놓고 씀.
    $obj->studentId = 20171234; // . 대신 -> 객체주소값 접근
    $obj->studentName = "Alice";
    $obj->printStudent($obj->studentId, $obj->studentName);

    printStudent("kkkk", "gggg");

?>

<!-- 자바스크립트 생성자함수 처럼
'객체'를 만듦. 항상 '대문자'로 시작.

class명 "대문자"로시작 !!!!!

멤버필드(멤버변수,멤버상수)
멤버메소드
-->