<?php

    // Access Modifier
    // 접근제어 지시자 (접근할 수 있는 범위를 지정)
    // 접근지시어
    // 접근제어자
    // private protected public
    class Student1 {
        public $StudentId;
        public $StudentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "NAME : {$name}<br>";
        }
    }
    
    // 위의 틀(객체를 만드는 틀. 붕어빵틀) 대로 객체생성 ㄱㄱ
    // new 하면 객체 생성
    // new 클래스명 선택.

    $obj = new Student1; // 객체주소값 리턴된것 담아놓고 씀.
    $obj->studentId = 20171234; // . 대신 -> 객체주소값 접근 // 쓰기
    $obj->studentName = "Alice";                            // 쓰기

    $obj->printStudent($obj->studentId, $obj->studentName); // 메소드 호출 (읽기)
?>




<!--
- 자바스크립트 생성자함수 처럼
'객체'를 만듦. 항상 '대문자'로 시작.

class 대문자로시작




- php 배열, php 객체 다른점 : 메소드 있냐 없나 

배열 - 메소드 가질 수 없음
객체 - 메소드 가질 수 있음

:
-->