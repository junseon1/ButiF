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
    

    <title>아름다운재단</title>
</head>
<body>
    <div class="wrap">
    <!-- header include -->
        <?php include "header.php"; ?>
        <section class="sec1">
            <!-- 메인슬라이드 - swiper plugin -->
            <div class="swiper main">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide s1">
                    <h1>유해물질로 부터 <br>자유로운 환경을 찾습니다!</h1>
                    <p>학교에서 만큼은 어린이가 유해물질 걱정없이 성장할 수 있도록<br>
                    "유자를 찾습니다" 캠페인을 시작합니다.</p>
                </div>
                <div class="swiper-slide s2">
                    <h2>여덟 번의 여름, 여덟 번의 나눔</h2>
                    <p>사랑하는 자녀의 생일마다 기부를 이어오고 있는<br>
                    정윤미 기부자의 이야기를 들려드려요.</p>
                </div>
                <div class="swiper-slide s3">
                    <h2>아내를 향한 사랑과 고마움이 담긴<br>
                    '박보라사랑기금'</h2>
                    <p>"저희 부부에게 가족기금은, 서로에 대한 선물이에요."<br>
                    박보라,엄상현 기부자가 전하는 <br>
                    가족기금 이야기를 만나보세요.</p>
                </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="sec2 scrollSet">
            <div class="center">
                <div class="bs ani firstAni">
                    <h2>지원 사업 신청</h2>
                    <p>시민들의 참여로 조성한 기부금을<br>기반으로 2023년 공모 지원 사업을 진행합니다.</p>
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
                <div class="log ani secondAni">
                    <h2>정기/일시 기부 회원가입</h2>
                    <p>아름다운재단은 어려운 이웃에게는 가장 가깝게,<br>
                        우리 사회 공익을 위해서는 가장 멀리 보며,<br>
                        소중한 기부금이 가장 아름답게 쓰이도록 노력합니다.
                    </p>   
                    <button type="button"><a href="#">자세히 보기</a></button>
                </div>
        </section>
        <section class="sec3 scrollSet">
            <div class="center">
                <div class="content ani firstAni">
                    <h2>아름다운 재단다움</h2>
                    <button type="button"><a href="#">자세히 보기</a></button>
                    <p>세상은 저절로 좋아지지 않습니다. <br>
                    우리가 먼저 변화를 시작하겠습니다.<br>
                    다양한 사회문제 해결을 위해 시민 참여와 <br>
                    나눔을 잇는 도전하는 재단이 되겠습니다.</p>
                    
                </div>
                <!-- swiper slide-->
                <div class="swiper menu ani secondAni">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image img1"></div>
                            <h3>기금조성</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img2"></div>
                            <h3>기업사회공헌</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img3"></div>
                            <h3>희망가게</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img4"></div>
                            <h3>나눔북스</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img5"></div>
                            <h3>기념일 기부</h3>
                        </div>
                    </div> 
                    <!-- prev버튼, next버튼 -->
                    
                    <!-- pagination progress -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next ani firstAni mNext3"></div>
                <div class="swiper-button-prev ani firstAni mPrev3"></div>
            </div>
            
            
        </section>
        <section class="sec4 scrollSet">
            <div class="center">
                <div class="content ani firstAni">
                    <h2>아름다운 재단활동</h2>
                    <button type="button"><a href="#">자세히 보기</a></button>
                    <p>아름다운재단은 2000년 8월부터<br>
                    꾸준하게 나눔으로 사회와 소통하고 있습니다.</p>
                    
                </div>
                <!-- swiper slide -->
                <div class="swiper act ani secondAni">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="image img1"></div>
                            <h3>후후레터뉴스레터</h3>
                            <button type="button"><a href="#">자세히 보기</a></button>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img2"></div>
                            <h3>공익사업</h3>
                            <button type="button"><a href="#">자세히 보기</a></button>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img3"></div>
                            <h3>나눔이야기</h3>
                            <button type="button"><a href="#">자세히 보기</a></button>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img4"></div>
                            <h3>일상다반사 </h3>
                            <button type="button"><a href="#">자세히 보기</a></button>
                        </div>
                        <div class="swiper-slide">
                            <div class="image img5"></div>
                            <h3>공익사업</h3>
                            <button type="button"><a href="#">자세히 보기</a></button>
                        </div>
                    </div> 
                    <!-- prev버튼, next버튼 -->
                    
                    <!-- pagination progress -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next ani firstAni next4"></div>
                <div class="swiper-button-prev ani firstAni prev4"></div>
            </div>
        </section>
        <section class="sec5 scrollSet">
            <div class="center ani">
                <div class="content firstAni">
                    <h2>지원 및 모금 현황</h2>
                    <button type="button"><a href="#">자세히 보기</a></button>
                    <p>아름다운재단은 어려운 이웃에게는<br>
                        가장 가깝게,우리 사회 공익을 위해서는 <br>
                        가장 멀리 보며소중한 기부금이 <br>
                        가장 아름답게 쓰이도록 노력합니다.</p>
                
                    <div class="awards">
                        <img src="img/awards5-5.jpg" alt="awards">
                    </div>
                </div>
                <div class="statis ani secondAni" id="count-area">
                    <ul>
                        <li>
                            <img src="img/logo(white).png" alt="로고화이트">
                            <p>개인 지원</p>
                            <div class="number">
                                <span class="num" id="count-item1"></span>
                                <b>명</b>
                            </div>
                            
                        </li>
                        <li>
                            <img src="img/logo(white).png" alt="로고화이트">
                            <p>단체 지원</p>
                            <div class="number">
                                <span class="num" id="count-item2"></span>
                                <b>건</b>
                            </div>
                        </li>
                        <li>
                            <img src="img/logo(white).png" alt="로고화이트">
                            <p>총 기부자</p>
                            
                            <div class="number">
                                <span  class="num" id="count-item3" ></span>
                                <b>명</b>
                            </div>
                        </li>
                        <li>
                            <img src="img/logo(white).png" alt="로고화이트">
                            <p>총 기부금</p>
                            
                            <div class="number">
                                <span class="num" id="count-item4"></span>
                                <b>원</b>
                            </div>
                        </li>
                        <li>
                            <img src="img/logo(white).png" alt="로고화이트">
                            <p>2023 수상</p>
                            <i>2023 에피 어워드 코리아<br>
                                '그랜드 에피' 수상</i>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="sec6 scrollSet">
            <div class="center">
                <div class="content ani firstAni">
                    <h2>사업안내</h2>
                    <button type="button"><a href="#">자세히 보기</a></button>
                    <p>우리 사회에 변화가<br>
                        필요한 9개의 영역에서 <br>
                        다양한 공익활동을 진행합니다.</p>
                </div>
                <div class="business">
                    <ul>
                        <li class="on1 ani ani1">
                            <a href="#">
                                <p>교육영역사업</p>
                                <div class="icon1"><img src="img/icon6-1.png" alt="아이콘1"></div>
                            </a>
                        </li>
                        <li class="on2 ani ani2">
                            <a href="#">
                                <p>안전영역사업</p>
                                <div class="icon2"><img src="img/icon6-2.png" alt="아이콘2"></div>
                            </a>
                            
                        </li>
                        <li class="on3 ani ani3">
                            <a href="#">
                                <p>노동영역사업</p>
                                <div class="icon3"><img src="img/icon6-3.png" alt="아이콘3"></div>
                            </a>
                        </li>
                        <li class="on4 ani ani4">
                            <a href="#">
                                <p>문화영역사업</p>
                                <div class="icon4"><img src="img/icon6-4.png" alt="아이콘4"></div>
                            </a>
                        </li>
                        <li class="on5 ani ani5">
                            <a href="#">
                                <p>건강영역사업</p>
                                <div class="icon5"><img src="img/icon6-5.png" alt="아이콘5"></div>
                            </a>
                        </li>
                        <li class="on6 ani ani6">
                            <a href="#">
                                <p>주거영역사업</p>
                                <div class="icon6"><img src="img/icon6-6.png" alt="아이콘6"></div>
                            </a>
                        </li>
                        <li class="on7 ani ani7">
                            <a href="#">
                                <p>환경영역사업</p>
                                <div class="icon7"><img src="img/icon6-7.png" alt="아이콘7"></div>
                            </a>
                        </li>
                        <li class="on8 ani ani8">
                            <a href="#">
                                <p>사회참여영역사업</p>
                                <div class="icon8"><img src="img/icon6-8.png" alt="아이콘8"></div>
                            </a>
                        </li>
                        <li class="on9 ani ani9">
                            <a href="#">
                                <p>기부문화연구사업</p>
                                <div class="icon9"><img src="img/icon6-9.png" alt="아이콘9"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
        </section>
    <!-- footer include -->
        <?php include "footer.php"; ?>
    </div>
<!-- top button -->
        <?php include "topbutton.php"; ?>
</body>
<script>
    // sec5영역의 count animation
    function count(element, start, end, duration) {
        let current = start;
        const range = end - start;
        const increment = range / (duration / 10);
        const stepTime = 50; // 10ms 마다 증가하도록 설정

        let timer = setInterval(function() {
            current += increment;
            if (current >= end) {
                clearInterval(timer);
                current = end;
            }
            element.textContent = formatNumber(current, end);
        }, stepTime);
    }

    function formatNumber(number, end) {
        if (Number.isInteger(end)) {
            return number.toFixed(0).replace(/(\d)(?=(\d{3})+$)/g, '$1,');
        } else {
            return number.toFixed(1);
        }
    }

    // 스크롤 이벤트 리스너
    window.addEventListener('scroll', function() {
        const countArea = document.getElementById('count-area');
        const countAreaPosition = countArea.getBoundingClientRect().top;
        const screenPosition = window.innerHeight;

        if (countAreaPosition < screenPosition / 2) { // 요소가 반이상 보였을 때 실행

            const count1 = document.getElementById('count-item1');
            count(count1, 0, 7434, 300);

            const count2 = document.getElementById('count-item2');
            count(count2, 0, 416, 300);

            const count3 = document.getElementById('count-item3');
            count(count3, 0, 19437, 300);

            const count4 = document.getElementById('count-item4');
            count(count4, 0, 10176758760, 300);

            // 이벤트 리스너 삭제
            window.removeEventListener('scroll', arguments.callee);
        }
    });
</script>
<script>
    // resize()메소드
    (function($) {
            $.AdjustZoom = function(options) {
            var option = { zoomRatio : 100 };
            $.extend(option, options);
            // 브라우저 배율이 100% 가 아닌 경우 처리
            if(screen.logicalXDPI != screen.deviceXDPI) {
                try {
                //alert(screen.availWidth+", "+screen.logicalXDPI+", "+screen.deviceXDPI);
                        var ratio = screen.logicalXDPI / screen.deviceXDPI;
                        var ratio_reverse = screen.deviceXDPI / screen.logicalXDPI;
                        $('body').css('zoom', ( ratio * option.zoomRatio)+'%');
                        $('body').width(screen.availWidth * ratio_reverse );
            }catch (e) {
                alert("브라우저 배율 보정 중 오류가 발생하였습니다. 창을 닫은 후 다시 열어 주시기 바랍니다.");
            }
        }
    };
    })(jQuery);
</script>
</html>