</section>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer id="footer">
  <div class="inner">
    <h4 class="f-logo"><a href="#">logo</a></h4>
    <ul class="f-menu">
      <li><a href="/sub/sub-f-personal.php">개인정보처리방침</a></li>
      <li><a href="/sub/sub-f-terms.php">이용약관</a></li>
      <li><a href="/sub/sub-f-collection.php">이메일무단수집거부</a></li>
      <li><a href="/sub/sub1-3.php">오시는길</a></li>
    </ul>
    <div class="f-hours">
      <ul class="f-open">OPENING HOURS
        <li>MON-FRI</li>
        <li>09:00 AM ~ 06:00 PM</li>
        <li>주말, 공휴일 휴무</li>
      </ul>
      <ul class="f-sns">
        <li><a href="https://ko-kr.facebook.com/Palgongtea.official/">페이스북</a></li>
        <li><a href="https://www.instagram.com/palgongtea.official/">인스타그램</a></li>
        <li><a href="https://blog.naver.com/palgongtea_official">네이버블로그</a></li>
      </ul>
    </div>
    <div class="f-adrr">
      <ul class="f-number">
        <li>사업자번호 669-88-01126</li>
        <li>㈜팔공티 대표이사 김종현</li>
      </ul>
      <ul class="f-txt">
        <li><adrress>주소 : 서울 강남구 밤고개로1길 10, 현대벤처빌 1822호 팔공티</adrress></li>
        <li>연락처 : 02-6928-8286</li>
        <li>이메일 : palgongtea@palgongtea.com</li>
      </ul>
      <p class="f-copy">ⓒ 2021 PALGONG TEA All rights reserved.</p>
    </div>
  </div>
</footer>
<!-- } 하단 끝 -->
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");