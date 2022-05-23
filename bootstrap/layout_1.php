<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- CSS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- JS 번들 -->
    <title>부트스트랩</title>
    <style>
        .container {
            background-color: red;
        }
        .container-sm {
            background-color: orange;
        }
        .container-md {
            background-color: yellow;
        }
        .container-lg {
            background-color: green;
        }
        .container-xl {
            background-color: blue;
        }
        .container-xxl {
            background-color: navy;
        }
        .container-fluid {
            background-color: purple;
        }
    </style>
</head>
<body>
        <div class="container">100% xsm</div>
        <div class="container-sm">100% wide until small breakpoint 576px</div>
        <div class="container-md">100% wide until medium breakpoint 768px</div>
        <div class="container-lg">100% wide until large breakpoint 992px</div>
        <div class="container-xl">100% wide until extra large breakpoint 1200px</div>
        <div class="container-xxl">100% wide until extra extra large breakpoint 1400px</div>
        <div class="container-fluid">always 100%</div>

</body>
</html>

<!--
https://getbootstrap.kr/

프론트엔드 프레임워크.
반응형, 모바일 우선 사이트 개발 편하게 도와줌.

CDN : Content Delivery Network(CSS,JS 오픈되어있게끔 해주는 서비스)
popper : 자바스크립트 라이브러리 <- 를 부트스트랩이 이용하고 있음 (팝업창)

2가지 import 해주면 부트스트랩 쓸수있는 환경마련됨.

http://localhost/green_PHP-main/bootstrap/
파일명까지 셋팅해놓지 않으면 index.php 로 가도록 자동으로 아파치 서버에 셋팅되어있음.

레이아웃> 중단점> Breakpoints
브라우저의 width(가로크기) 시점마다 존재.
-->