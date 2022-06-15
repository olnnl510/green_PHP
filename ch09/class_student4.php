<?php
class Student1 {
    private $StudentId; // 중괄호 벗어난곳에서는 접근할 수 없음 (캡슐화. 은닉화)
    private $StudentName;

    //getters // 객체의 attribute(변수) 를 반환
    public function getStudentId() {
        return $this->studentId;
    }
    //setters // 파라미터를 받아서 attribute 에 할당
    public function setStudentId($studentId){
        $this->studentId = $studentId;
        return $this; // print $obj2->setStudentId(8888)->getStudentId() . "<br>"; 연달아 쓰려고 리턴한거라서 연달아서 쓸필요없으며 setter에 리턴안해도 됨 thanks to 은지
    }

    //getters // 객체의 attribute(변수) 를 반환
    public function getStudentName(){
        return $this->studentName;
    }
    //setters // 파라미터를 받아서 attribute 에 할당
    public function setStudentName($studentName){
        $this->studentName = $studentName;
        return $this;
    }

    public function printStudent(){
        print "ID : {$this->studentId}<br>";
        print "NAME : {$this->studentName}<br>";
    }
}




$obj = new Student1; // 객체주소값 리턴된것 담아놓고 씀.
print "1번째 : " . $obj->setStudentId(1122)->getStudentId() . "<br>";
// $obj->printStudent(); // 메소드 호출 (읽기)


$obj2 = new Student1; // 객체주소값 리턴된것 담아놓고 씀.
print $obj2->setStudentId(8888)->getStudentId() . "<br>";
print "2번째 : " . $obj->getStudentId() . "<br>";
// $obj->printStudent(); // 메소드 호출 (읽기)

?>



<!--
this : 호출한 나 자신의 객체 주소값

$obj->setStudentId(1222);
$obj->setStudentName("hong");
이렇게 쓰려면 setters에서 return $this; 할 필요 없음 thanks to 그린

print $obj2->setStudentId(8888)->getStudentId();
이렇게 연달아 쓰려고 리턴한거라서 연달아서 쓸필요없으며 setter에 리턴안해도 됨 thanks to 은지




-->