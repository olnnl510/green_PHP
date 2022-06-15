<?php
    class Student1 {
        private $StudentId; // 중괄호 벗어난곳에서는 접근할 수 없음 (캡슐화. 은닉화)
        private $StudentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "NAME : {$name}<br>";
        }
    }
    
    $obj = new Student1; // 객체주소값 리턴된것 담아놓고 씀.
    // $obj-> StudentId = 111; // private. 값을 넣으려고 하는 순간 에러 터짐.
    $obj->printStudent("olnnl510" , "강동원"); // 메소드 호출 (읽기)
?>



<!--
    상수만 public 가능.
    변수는 전부 private로 감춰놓음.
    
    private 했기때문에
    외부에서 접근하려하면 에러터짐!
-->