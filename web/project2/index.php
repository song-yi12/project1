<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

<nav class="hidden">메인 콘텐츠</nav>
  <section class="visual" data-vide-bg="/mov/visual-mov.mp4">
    <div class="inner">
      <p class="visual-tit">기분 좋은 하루의 시작,</p>
      <span class="visual-txt">Coffee doesn't ask silly questions, Coffe understand.</span>
    </div>
  </section>
  <section class="menu sec">
    <div class="menu-inner inner">
      <h2 class="tit">PALGONGTEA MENU</h2>
      <p class="desc">팔공티의 대표 메뉴와 시즌 메뉴를 알아보세요.</p>
      <div class="menu-wrap">
        <div class="menu-tab-signature menu-tab">
          <strong class="signature-name menu-name">Signature Menu</strong>
          <div class="manu-tab-box swiper mySwiper">
            <div class="menu-tab-wrap swiper-wrapper">
              <div class="swiper-slide">
                <p>블랙 밀크티(ICE)</p>
                <span>진하고 감미로운 홍차와<br>쫀득한 타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=18" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p>블랙 밀크티(HOT)</p>
                <span>진하고 감미로운 홍차 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=17" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="garlgrey-ice-tit">얼그레이 밀크티(ICE)</p>
                <span class="garlgrey-ice-txt">베르가못 향이 감도는 티와<br>타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=16" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="garlgrey-hot-tit">얼그레이밀크티(HOT)</p>
                <span class="garlgrey-hot-txt">베르가못 향이 감도는 티 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=15" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="woolong-ice-tit">우롱 밀크티(ICE)</p>
                <span class="woolong-ice-txt">깊고 구수한 향이 감도는 티와 쫀득한 타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=14" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="woolong-hot-tit">우롱밀크티(HOT)</p>
                <span class="woolong-hot-txt">깊고 구수한 향이 감도는 티 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=13" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="Jasminum-ice-tit">자스민 그린 밀크티(ICE)</p>
                <span class="Jasminum-ice-txt">꽃잎 향이 감도는 티와 쫀득한 타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=12" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="Jasminum-hot-tit">자스민 그린 밀크티(HOT)</p>
                <span class="Jasminum-hot-txt">꽃잎 향이 감도는 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=11" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="dolce-ice-tit">돌체 블랙 밀크티(ICE)</p>
                <span class="dolce-ice-txt">프리미엄 시럽을 추가하여, 밸런스 잡힌 깔끔한 단맛의 블랙 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=10&page=2" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="dolce-hot-tit">돌체 블랙 밀크티(HOT)</p>
                <span class="dolce-hot-txt">프리미엄 시럽을 추가하여, 밸런스 잡힌 깔끔한 단맛의 블랙 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=9&page=2" class="btn">더 알아보기</a>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-tab-season menu-tab">
          <strong class="season-name menu-name">Season Menu</strong>
          <div class="manu-tab-box swiper mySwiper">
            <div class="menu-tab-wrap swiper-wrapper">
              <div class="swiper-slide">
                <p class="sweetpotato-ice-tit">자색 군고구마 밀크티(ICE)</p>
                <span class="sweetpotato-ice-txt">군고구마의 풍미를 살리고<br>타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=11" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-hot-tit">자색 군고구마 밀크티(HOT)</p>
                <span class="sweetpotato-hot-txt">군고구마의 풍미를 살린<br>달콤한 맛의 군고구마 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=10" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-ice-tit">초당 옥수수 밀크티(ICE)</p>
                <span class="sweetpotato-ice-txt">옥수수의 단맛에<br>타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=9" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-hot-tit">초당 옥수수 밀크티(HOT)</p>
                <span class="sweetpotato-hot-txt">초당 옥수수의 풍미를 살린 달콤한 맛의 옥수수 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=8" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-ice-tit">치즈폼 군고구마라떼(ICE)</p>
                <span class="sweetpotato-ice-txt">군고구마의 풍미를 살리고, 고소한 치즈폼이 올라간 달콤하고 시원한 고구마 라떼.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=7" class="btn">더 알아보기</a>
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-hot-tit">치즈폼 군고구마라떼(HOT)</p>
                <span class="sweetpotato-hot-txt">군고구마의 풍미를 살리고, 고소한 치즈폼이 올라간 달콤하고 따뜻한 고구마 라떼.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=6" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-ice-tit">치즈폼 초당 옥수수라떼(ICE)</p>
                <span class="sweetpotato-ice-txt">초당 옥수수의 단맛이 가득하고, 고소한 치즈폼이 올라간 시원한 옥수수 라떼.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=5" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="sweetpotato-hot-tit">치즈폼 초당 옥수수라떼(HOT)</p>
                <span class="sweetpotato-hot-txt">초당 옥수수의 단맛이 가득하고, 고소한 치즈폼이 올라간 옥수수 라떼.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season&wr_id=4" class="btn">더 알아보기</a> 
              </div>
            </div>
          </div>
        </div>
        <div class="menu-tab-all menu-tab">
          <strong class="all-name menu-name">All Menu</strong>
          <div class="manu-tab-box swiper mySwiper">
            <div class="menu-tab-wrap swiper-wrapper">
              <div class="swiper-slide">
                <p class="black-ice-tit">블랙 밀크티(ICE)</p>
                <span class="black-ice-txt">감미로운 홍차와 타피오카<br>펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=18" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="black-hot-tit">블랙밀크티(HOT)</p>
                <span class="black-hot-txt">진하고 감미로운 홍차 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=17" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="garlgrey-ice-tit">얼그레이 밀크티(ICE)</p>
                <span class="garlgrey-ice-txt">베르가못 향이 감도는 티와<br>쫀득한 타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=16" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="garlgrey-hot-tit">얼그레이밀크티(HOT)</p>
                <span class="garlgrey-hot-txt">은은하게 베르가못 향이 감도는 티 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=15" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="woolong-ice-tit">우롱 밀크티(ICE)</p>
                <span class="woolong-ice-txt">깊고 구수한 향이 감도는 티와 쫀득한 타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=14" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="woolong-hot-tit">우롱밀크티(HOT)</p>
                <span class="woolong-hot-txt">깊고 구수한 향이 감도는 티 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=13" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="Jasminum-ice-tit">자스민 그린 밀크티(ICE)</p>
                <span class="Jasminum-ice-txt">꽃잎 향이 감도는 티와 쫀득한 타피오카 펄이 어우러진 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=12" class="btn">더 알아보기</a> 
              </div>
              <div class="swiper-slide">
                <p class="Jasminum-hot-tit">자스민 그린 밀크티(HOT)</p>
                <span class="Jasminum-hot-txt">꽃잎 향이 감도는 밀크티.</span>
                <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery&wr_id=11" class="btn">더 알아보기</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <aside class="leaves" >
        <div class="inner">
          <figure class="leaves1"><img src="img/leaves1.png" alt="#"></figure>
          <figure class="leaves2"><img src="img/leaves2.png" alt="#"></figure>
          <figure class="leaves3"><img src="img/leaves3.png" alt="#"></figure>
          <figure class="circle"><img src="img/circle-text.png" alt="#"></figure>
        </div>
      </aside>
    </div>
  </section>
  <section class="quick sec">
    <div class="inner">
      <h2 class="tit">QUICK MENU</h2>
      <p class="desc">팔공티의 가맹점 안내입니다.</p>
      <div class="quick-wrap">
        <article class="quick-wrap-founding">
          <dl class="founding-box">
            <dt class="founding-tit"><a href="/sub/sub3-1.php">가맹 절차</a></dt>
            <dd class="founding-txt">가맹 절차 안내입니다.</dd>
          </dl>
        </article>
        <article class="quick-wrap-join">
          <dl class="join-box">
            <dt class="join-tit"><a href="/sub/sub3-3.php">가맹 비용</a></dt>
            <dd class="join-txt">가맹 비용 안내입니다.</dd>
          </dl>
        </article>
        <article class="quick-wrap-market">
          <dl class="market-box">
            <dt class="market-tit"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map">매장 안내</a></dt>
            <dd class="market-txt">전국 각지의 팔공티 매장 안내입니다.</dd>
          </dl>
        </article>
        <article class="quick-wrap-shop">
          <dl class="shop-box">
            <dt class="shop-tit"><a href="#">브랜드 제휴</a></dt>
            <dd class="shop-txt">브랜드 제휴 문의 안내입니다.</dd>
          </dl>
        </article>
      </div>
    </div>
    <aside class="quick-leaves" >
      <div class="inner">
        <figure class="quick-leaves1"><img src="img/quick-leaves1.png" alt="#"></figure>
        <figure class="quick-leaves2"><img src="img/quick-leaves2.png" alt="#"></figure>
        <figure class="quick-leaves3"><img src="img/quick-leaves3.png" alt="#"></figure>
      </div>
    </aside>
  </section>
  <section class="open sec">
    <div class="inner">
      <div class="open-wrap">
        <h2 class="open-tit">PALGONGTEA</h2>
        <div class="open-desc">신규 오픈 매장</div>
        <p class="open-txt">팔공티의 새롭게 오픈한 매장을<br>빠르게 확인해 보세요!</p>
        <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map">VIEW MORE</a>
      </div>
      <div class="open-slide-box-wrap">
        <div class="open-slide-box mySwiper2">
          <div class="open-slide swiper-wrapper">
            <article class="open-slide-daegu swiper-slide">
              <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map&wr_id=32" class="open-tit-wrap">
                <h3 class="slide-tit">PALGONGTEA</h3>
                <p class="slide-desc">대구구지점</p>
              </a>
              <figure class="slide-img"><img src="img/daegoo.png" alt="#"></figure>
            </article>
            <article class="open-slide-jeju swiper-slide">
              <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map&wr_id=33" class="open-tit-wrap">
                <h3 class="slide-tit">PALGONGTEA</h3>
                <p class="slide-desc">제주노형점</p>
              </a>
              <figure class="slide-img"><img src="img/nohyeong.png" alt="#"></figure>
            </article>
            <article class="open-slide-junju swiper-slide">
              <a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map&wr_id=34" class="open-tit-wrap">
                <h3 class="slide-tit">PALGONGTEA</h3>
                <p class="slide-desc">전주만성점</p>
              </a>
              <figure class="slide-img"><img src="img/mansung.png" alt="#"></figure>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="commu sec">
    <div class="inner">
      <h2 class="tit">PALGONGTEA NOTICE</h2>
      <p class="desc">팔공티의 공지사항을 안내합니다.</p>
      <div class="commu-wrap">
        <?php
          // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
          // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
          // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
          echo latest('theme/pic_block', 'notice', 3, 23);		// 최소설치시 자동생성되는 공지사항게시판
        ?>
      </div>
    </div>
  </section>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        autoplay: {     //자동슬라이드 (false-비활성화)
          delay: 2500, // 시간 설정
          disableOnInteraction: false, // false-스와이프 후 자동 재생
        },

        loop : false,   // 슬라이드 반복 여부

        loopAdditionalSlides : 1,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
          },
        },
      });
    </script>
    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView : 'auto', // 한 슬라이드에 보여줄 갯수
        spaceBetween: 10,
        autoplay: {     //자동슬라이드 (false-비활성화)
          delay: 2500, // 시간 설정
          disableOnInteraction: false, // false-스와이프 후 자동 재생
        },
        loop : false,   // 슬라이드 반복 여부
        loopAdditionalSlides : 1,
      });
    </script>
    <script>
      $(function(){
        $('.menu-name').on('click' , function(){
            $('.manu-tab-box').hide();
            $(this).next().show()
        })
    });
    $(function(){
          $('.commu-tab-click').on('click' , function(){
              $('.commu-tab-box').hide();
              $(this).next().show()
          })
      });
    </script>
<?php
include_once(G5_PATH.'/tail.php');