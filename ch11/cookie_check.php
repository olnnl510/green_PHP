<?php

    if(isset($_COOKIE['country'])) // 최초 setcookie 했지만 false
    {
        echo "Country : ", $_COOKIE['country'], "<br>";
    }
?>