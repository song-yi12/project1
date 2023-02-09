<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head5.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <h3 class="member-tit"><strong>PALGONGTEA</strong> MEMBERSHIP</h3>
  <p class="member-desc">비대면으로 주문 가능한 스마트한 방법</p>
  <section class="member-wrap clearfix">
    <article class="member-head">
      <div class="member-text-box">
        <p class="member-txt">팔공티 APP 이용 가이드</p>
        <span class="member-txt-eng">PALGONGTEA APP USER GUIDE</span>
      </div>
      <div class="member-img-box">
        <figure><img src="/img/member-iphone.png" alt="#"></figure>
      </div>
    </article>
    <article class="member-guide">
      <strong>팔공티 앱 설치하는 방법</strong>
      <article class="member-android">
        <p>안드로이드(android)</p>
        <ul class="member-android-li">
          <li>Play Store 접속</li>
          <li>팔공티 검색</li>
          <li>설치</li>
        </ul>
        <span class="member-android-qr">QR코드를 스캔하시면, 팔공티 앱을<br>편리하게 설치하실 수 있습니다.</span>
      </article>
      <article class="member-iphone">
        <p>아이폰(iOS)</p>
        <ul class="member-iphone-li">
          <li>App Store 접속</li>
          <li>팔공티 검색</li>
          <li>설치</li>
        </ul>
        <span class="member-iphone-qr">QR코드를 스캔하시면, 팔공티 앱을<br>편리하게 설치하실 수 있습니다.</span>
      </article>
    </article>
    <article class="member-app">
      <strong>PALGONGTEA APP 설치하기</strong>
      <p>POS 및 키오스크 앞에서 기다리지 마세요.<br>팔공티 앱은 매장에 방문 시 <em>줄을 서지 않고<br>메뉴를 픽업</em> 할 수 있는 서비스입니다.</p>
      <figure><img src="/img/member-iphone.png" alt="#"></figure>
    </article>
    <article class="member-use">
      <p>메뉴를 간편하게 주문할 수 있는</p>
      <strong>쉽고 빠른 팔공티 앱</strong>
      <em>지금 사용해 보세요!</em>
      <div class="member-use-box">
        <p class="member-use-tit">사용 방법</p>
        <ul>
          <li>
            <p>1. 회원가입</p>
            <span>팔공티에 접속하여<br>회원가입을 클릭한 뒤<br>고객님의 개인 정보 입력.</span>
          </li>
          <li>
            <p>2. 메뉴선택</p>
            <span>APP 메인 화면에<br>'스마트 오더'를<br>클릭해 주세요.</span>
          </li>
          <li>
            <p>3. 내 주변매장 확인</p>
            <span>가까운 매장을 자동 검색<br>주문하고자 하는 매장을<br>선택해 주세요.</span>
          </li>
          <li>
            <p>4. 메뉴주문</p>
            <span>주문하고자 하는<br>메뉴와 옵션 선택.</span>
          </li>
          <li>
            <p>5. 결제하기</p>
            <span>주문을 완료 후,<br>결제창에서 결제해 주세요.</span>
          </li>
          <li>
            <p>6. 주문완료</p>
            <span>주문 현황을 확인하시고<br>메뉴 제조가 완료되면 픽업대에서<br>메뉴를 픽업해 주세요.</span>
          </li>
        </ul>
      </div>
    </article>
  </section>
<?php
include_once(G5_PATH.'/sub-tail.php');