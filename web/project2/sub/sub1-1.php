<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head1.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <div class="inner">
    <h3 class="intro-tit"><strong>I</strong>NTRODUCE</h3>
    <article class="intro-nature sec">
      <h4 class="nature-tit tit">자연을 마시는 <strong>"PALGONGTEA"</strong></h4>
      <P class="nature-desc desc">세계의 유명한 차 산지국에서 최적의 기온과 기상조건을 갖추어<br>엄선된 차를 신선하게 마실 수 있는 <em id="tit-em">'스페셜 티 차가 가장 맛있는 팔공티’</em> 입니다.</P>
      <figure class="nature-textcircle"><img src="/img/sub1-circle.png" alt="#"></figure>
      <figure class="nature-img"><img src="/img/sub1-intro-img1.png" alt="#"></figure>
      <figure class="nature-logoimg"><img src="/img/sub1-intro-img2.png" alt="#"></figure>
    </article>
    <article class="intro-philosophy sec">
      <h4 class="philosophy-tit tit"><strong>"PALGONGTEA"</strong> 철학은 이렇습니다.</h4>
      <p class="philosophy-desc desc">현지의 티 마스터들이 팔공티만의 엄선된 차를 만들기 위해<br><em>철저하게 관리하고 노력</em>하고 있습니다.</p>
      <ul class="philosophy-list">
        <li class="philosophy-list-temperatures"><p>최적의 <em>기온</em></p></li>
        <li class="philosophy-list-weather"><p>최적의 <em>기상 조건</em></p></li>
        <li class="philosophy-list-expert"><p>전문가의 <em>철저한 관리</em></p></li>
        <li class="philosophy-list-effort"><p><em>자연</em>을 담으려는 <em>노력</em></p></li>
      </ul>
    </article>
    <article class="intro-ci sec">
      <h4 class="ci-tit tit"><strong>"PALGONGTEA"</strong> CI</h4>
      <p class="ci-desc desc">차의 종류마다 우리는 온도/우리는 시간이 핵심이며, 차를 맛있게 드시려면<br>그 <em>맛을 만족시키는 온도는 80도!</em> 그 온도를 착안해서 만들어진 팔공티의 로고입니다.</p>
      <article class="ci-logo">
        <figure class="ci-logo-vertical"><img src="/img/sub1-ci.png" alt="#"></figure>
        <figure class="ci-logo-horizontal"><img src="/img/sub1-ci2.png" alt="#"></figure>
      </article>
      <div class="ci-btn">
        <a href="#">
          <span>PALGONGTEA CI DOWNLOAD</span><i class="fa-regular fa-circle-down"></i>
        </a>
      </div>
    </article>
  </div>
<?php
include_once(G5_PATH.'/sub-tail.php');