<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head3.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <h3 class="interior-tit"><strong>PALGONGTEA</strong> 인테리어</h3>
  <p class="interior-desc">팔공티만의 포인트인 블랙&화이트로<br><em>모던하면서도 깔끔함</em>을 강조한 인테리어와 임팩트가 있는 <em>팔공티의 로고에 포인트를 주어 설계함</em>으로써<br>편안한 공간에 생기를 불어넣어 주는 팔공티만의 컨셉입니다.</p>
  <div class="three-swiper swiper mySwiper">
    <p>30평형 매장</p>
    <div class="three-slide-wrap swiper-wrapper">
      <div class="three-slide swiper-slide"><figure><img src="/img/30-market.png" alt=""></figure></div>
      <div class="three-slide swiper-slide"><figure><img src="/img/30-market2.png" alt=""></figure></div>
      <div class="three-slide swiper-slide"><figure><img src="/img/30-market3.png" alt=""></figure></div>
      <div class="three-slide swiper-slide"><figure><img src="/img/30-market4.png" alt=""></figure></div>
      <div class="three-slide swiper-slide"><figure><img src="/img/30-market5.png" alt=""></figure></div>
    </div>
  </div>
  <div class="ten-swiper swiper mySwiper">
    <p>10평형 매장</p>
    <div class="ten-slide-wrap swiper-wrapper">
      <div class="ten-slide swiper-slide"><figure><img src="/img/10-market.png" alt=""></figure></div>
      <div class="ten-slide swiper-slide"><figure><img src="/img/10-market2.png" alt=""></figure></div>
    </div>
  </div>
  <div class="kiosk-swiper swiper mySwiper">
    <p>KIOSK 매장</p>
    <div class="kiosk-slide-wrap swiper-wrapper">
      <div class="kiosk-slide swiper-slide"><figure><img src="/img/kiosk-market.png" alt=""></figure></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {     //자동슬라이드 (false-비활성화)
          delay: 2500, // 시간 설정
          disableOnInteraction: false, // false-스와이프 후 자동 재생
        },

        loop : false,   // 슬라이드 반복 여부

        loopAdditionalSlides : 1,
    });
  </script>
<?php
include_once(G5_PATH.'/sub-tail.php');