<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head1.php');
?>
  <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
  
  <nav class="hidden">메인 콘텐츠</nav>
  <div class="inner">
    <h3 class="map-tit"><strong>PALGONGTEA</strong> 오시는 길</h3>
    <div class="map-wrap">
      <article class="map-box">
        <div class="map-text-box map-text-box-s">
          <strong>본사</strong>
          <span>서울 강남구 밤고개로1길 10, 수서 현대벤처빌 1822호</span>
          <p>업무 시간</p>
          <span><em>평일</em> 09:00~18:00<br><em>점심시간</em> 12:00~13:00</span>
        </div>
        <article class="map-box-s">
          <div id="daumRoughmapContainer1672711646153" class="root_daum_roughmap root_daum_roughmap_landing"></div>
        </article>
      </article>
      <article class="map-box">
        <div class="map-text-box map-text-box-b">
          <strong>부산 사무실</strong>
          <span>부산광역시 부산진구 가야대로572번길 10</span>
          <p>업무 시간</p>
          <span><em>평일</em> 09:00~18:00<br><em>점심시간</em> 12:00~13:00</span>
        </div>
        <article class="map-box-b">
          <div id="daumRoughmapContainer1672712448167" class="root_daum_roughmap root_daum_roughmap_landing"></div>
        </article>
      </article>
      <!--2. 설치 스크립트* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.-->
    </div>
  </div>
  <!-- 3. 실행 스크립트 -->
  <script charset="UTF-8">
    new daum.roughmap.Lander({
      "timestamp" : "1672711646153",
      "key" : "2d9p2",
      "mapWidth" : "600",
      "mapHeight" : "300"
    }).render();
  </script>
  <!-- * 카카오맵 - 지도퍼가기 -->
  <!-- 3. 실행 스크립트 -->
  <script charset="UTF-8">
    new daum.roughmap.Lander({
      "timestamp" : "1672712448167",
      "key" : "2d9pi",
      "mapWidth" : "600",
      "mapHeight" : "300"
    }).render();
  </script>
<?php
include_once(G5_PATH.'/sub-tail.php');