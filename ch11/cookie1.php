<?php
    setcookie("country", "Korea"); // 바로 쿠키함수 쓸수없음.. 다음페이지에서

    if(isset($_COOKIE['country'])) // 최초 setcookie 했지만 false
    {
        echo "Country : ", $_COOKIE['country'], "<br>";
    }
?>
<a href="cookie2.php">Next Page</a>

<!-- 클라이언트쪽에 쿠키값이 저장되는데

요청이 올때 마다 쿠키를 데리고 옴

서버쪽에서도 열어볼 수 있음.

데리고 오는 값 다를 수 있으므로 보안이 약함.

    Req 요청
C ==========> S
 <==========
    Res 응답


    cookie_check.php

세션과 비슷하지만 저장위치가 서버쪽이아니라 클라이언트쪽이라는게 다름.

-->