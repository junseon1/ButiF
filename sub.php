<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>아름다운 재단</title>
        <!-- swiper.css cdn으로 연결 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <!-- 사용자 정의 css 연결 -->
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/sub.css" type="text/css">
        <!-- 파비콘 넣기 -->
        <link rel="shortcut icon" href="img/favicon12.png">
        <!-- 제이쿼리 라이브러리 연결 -->
        <script src="js/jquery-3.7.1.js"></script>
        <!-- swiper.js cdn으로 연결 -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <!-- 반드시 main.js위에 제이쿼리 아래에 작성한다  -->
        <script src="js/gsap.min.js"></script>
        <!-- 사용자 정의 js연결 -->
        <script src="js/main.js"></script>
        <script src="js/sub.js"></script>
        
</head>
<body>
    <?php include "header.php"; ?>
    <section class="sub_main">
        <div class="swiper main">
            <div class="swiper-wrapper">
                <div class="swiper-slide s1">
                
                </div>
                <div class="swiper-slide s2">
                
                </div>
                <div class="swiper-slide s3">
                
                </div>
            </div>
            <div class="swiper-pagination"></div>
            </div>
    </section>
    <section class="ban">
        <div class="center1">
            <div class="banner bn1">
                <div class="banner_pic bp1"></div>
                <div class="content_s con1">
                    <h2>환경영역 캠페인</h2>
                    <p>학교에서만큼은 어린이가 유해물질 걱정없이 성장할<br>
                    수 있도록 유자를 찾습니다 캠페인을 시작합니다.</p>
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
            </div>
            <div class="banner bn2">
                <div class="banner_pic bp2"></div>
                <div class="content_s t con2">
                    <h2>열여덟 어른 시즌3 손자영 프로젝트</h2>
                    <p>열여덟 어른의 '좋은 어른'이 되어<br>
                    미디어 프로젝트에 함께해주세요.</p>
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
            </div>
            <div class="banner bn3">
                <div class="banner_pic bp3"></div>
                <div class="content_s con3">
                    <h2>열여덟 어른 신선 프로젝트</h2>
                    <p>다양한 미디어를 통해<br>
                    자립준비청년의 진짜 이야기를 이야기합니다.</p>
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
            </div>
            <div class="banner bn4">
                <div class="banner_pic bp4"></div>
                <div class="content_s con4">
                    <h2>열여덟 어른 허진이 프로젝트</h2>
                    <p>'홀로'서기가 아니기에 우리는 '함께' 합니다.<br>
                    열여덟 어른의 이야기를 들어주세요.</p>
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
            </div>
            <div class="banner bn5">
                <div class="banner_pic bp5"></div>
                <div class="content_s con5">
                    <h2>열여덟 어른 캠페인 시즌3</h2>
                    <p>우리는 오늘도 자립하고 있습니다.</p>
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
            </div>
        </div>
    </section>
       <!-- footer include -->
    <?php include "footer.php"; ?>
    
    <!-- top button -->
    <?php include "topbutton.php"; ?>
</body>
</html>