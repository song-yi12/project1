<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head2.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <h3 class="collec-tit"><strong>PALGONGTEA</strong> Collection</h3>
  <p class="collec-desc">팔공티의 Tea Collection입니다.</p>
  <article class="collec-right-wrap">
    <div class="collec-inner">
      <strong class="collec-right-tit">블랙티(홍차)</strong>
      <article class="collec-right-imgbox imgbox">
        <figure class="collec-right-img"><img src="/img/gall_blacktea.png" alt="#"></figure>
      </article>
      <article class="collec-right-textbox textbox">
        <p class="collec-right-txt">찻잎이 숙성되면서 붉은색을 띠고, 과일 향이 자욱해짐<br>차 탕과 엽저의 색이 “홍색”을 띠어 홍차라 부르고,<br>홍차 잎의 색은 진한 홍색 중 검은빛을 띠어 영어로는 “Black Tea”라 한다.</p>
        <dl class="collec-right-smallbox">
          <dt>숙성도</dt>
          <dd>상</dd>
        </dl>
        <div class="collec-right-temper temper">온도 <span>97℃</span></div>
        <div class="collec-right-body body1">
          <p>바디감(Body)</p>
          <p>신맛(Acidity)</p>
          <p>단맛(Sweetness)</p>
        </div>
      </article>
    </div>
    <div class="collec-inner">
      <strong class="collec-left-tit">자스민 그린티</strong>
      <article class="collec-left-imgbox imgbox">
        <figure class="collec-left-img"><img src="/img/gall_jasminetea.png" alt="#"></figure>
      </article>
      <article class="collec-left-textbox textbox">
        <p class="collec-left-txt">투명한 푸른빛 찻물 색<br>싱그럽고 우아한 향기가 오래 지속되며 맛이 매우 깔끔<br>폴리페놀과 비타민 C의 함량이 높음
        <dl class="collec-left-smallbox">
          <dt>숙성도</dt>
          <dd>하</dd>
        </dl>
        <div class="collec-left-temper temper">온도 <span>77℃</span></div>
        <div class="collec-left-body body2">
          <p>바디감(Body)</p>
          <p>신맛(Acidity)</p>
          <p>단맛(Sweetness)</p>
        </div>
      </article>
    </div>
    <div class="collec-inner">
      <strong class="collec-right-tit">얼그레이티</strong>
      <article class="collec-right-imgbox imgbox">
        <figure class="collec-right-img"><img src="/img/gall_blacktea.png" alt="#"></figure>
      </article>
      <article class="collec-right-textbox textbox">
        <p class="collec-right-txt">달콤한 꿀 향, 과일의 새콤함과 꽃의 우아한 향<br>진한 오렌지색 찻물<br>상큼한 베르가못 향이 첨가되어 있음</p>
        <dl class="collec-right-smallbox">
          <dt>숙성도</dt>
          <dd>상</dd>
        </dl>
        <div class="collec-right-temper temper">온도 <span>97℃</span></div>
        <div class="collec-right-body body3">
          <p>바디감(Body)</p>
          <p>신맛(Acidity)</p>
          <p>단맛(Sweetness)</p>
        </div>
      </article>
    </div>
    <div class="collec-inner">
      <strong class="collec-left-tit">우롱티</strong>
      <article class="collec-left-imgbox imgbox">
        <figure class="collec-left-img"><img src="/img/gall_blacktea.png" alt="#"></figure>
      </article>
      <article class="collec-left-textbox textbox">
        <p class="collec-left-txt">가공 후 찻잎의 색이 청갈색이어서 청차라 불림<br>부드러운 꽃향기와 달콤한 과일 향이 두드러짐<br>녹차와 홍차의 오묘한 조화를 느껴볼 수 있는 아주 매력적인 차</p>
        <dl class="collec-left-smallbox">
          <dt>숙성도</dt>
          <dd>상</dd>
        </dl>
        <div class="collec-left-temper temper">온도 <span>85℃</span></div>
        <div class="collec-left-body body4">
          <p>바디감(Body)</p>
          <p>신맛(Acidity)</p>
          <p>단맛(Sweetness)</p>
        </div>
      </article>
    </div>
  </article>
<?php
include_once(G5_PATH.'/sub-tail.php');