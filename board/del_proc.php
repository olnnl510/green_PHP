<?php
    include_once "db.php";

    $i_board = $_GET["i_board"];
    $sql = "DELETE FROM t_board WHERE i_board = $i_board";
    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: list.php");
?>

<!--
db.php 파일을 포함함.

변수 : 키값 get으로 받아옴
변수 : 쿼리문 (삭제)
변수 : get_conn 함수(db랑연결)

커넥정보/실행시킬쿼리문 (영향줄수)
커넥닫음
리다이렉트
-->