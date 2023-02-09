<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head1.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <div class="inner">
    <h3 class="global-tit"><strong>G</strong>lobal <strong>B</strong>usiness</h3>
    <p class="global-desc">해외사업</p>
    <article class="global-map">
      <span class="map-korea">KOREA</span>
      <span class="map-canada">CANADA</span>
      <span class="map-usa">USA</span>
      <span class="map-aust">AUSTRALIA</span>
    </article>
    <article class="global-consulting">
      <div class="consulting-wrap">
        <h4 class="consulting-tit">해외 사업 상담 신청</h4>
        <div class="consulting-box">
          <strong>(주)팔공티(이하 ‘회사’라 한다) <span>해외사업상담신청을 요청하는 기업 및 개인을 대상</span>으로 아래와 같이<br>개인정보를 수집하고 있습니다.</strong>
          <em>회사는 고객문의 내용 확인과 답변을 위해 아래와 같은 개인정보를 수집하고 있습니다.</em>
          <p>- 수집항목 : 업체명(회사명), 신청인 이름, 연락처, 이메일, 문의내용</p>
          <p>- 개인정보 수집방법 : 고객문의</p>
        </div>
        <div class="consulting-btn">
          <button class="consulting-btn-click" type="button">button</button>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-solid fa-circle-check"></i>
          <p>동의합니다</p>
        </div>
      </div>
    </article>
    <article class="global-input">
      <div class="input-wrap">
        <p class="input-tit">정보 입력</p>
        <ul class="input-box">
          <li class="input-box-name">
            <span class="input-box-name-tit">
              * 이름
            </span>
            <input type="text" name="text">
          </li>
          <li class="input-box-market">
            <span class="input-box-market-tit">
              * 업체명
            </span>
            <input type="text" name="text">
          </li>
          <li class="input-box-number">
            <span class="input-box-number-tit">
              * 연락처
            </span>
            <select id="number1">
              <option value="">::선택::</option>
              <option value="011">011</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="019">019</option>
              <option value="010">010</option>
            </select>
            <input type="text" id="number2" size="4" onkeypress="onlyNumber();" />
            <input type="text" id="number3" size="4" />
          </li>
          <li class="input-box-email">
            <span class="input-box-email-tit">
              * 이메일
            </span>
            <input type="email" class="email-id"><em>@</em><input type="email" id="email-adrr">
            <select id="emailadrr-select" id="select">
              <option value="naver.com">naver.com</option>
              <option value="daum.net">daum.net</option>
              <option value="gmail.com">gmail.com</option>
              <option value="nate.com">nate.com</option>
            </select>
          </li>
          <li class="input-box-qna">
            <span class="input-box-qna-tit">
              * 문의 내용
            </span>
            <input id="qna-box" type="text" value="문의 내용을 입력해 주세요">
          </li>
          <li class="input-box-file">
            <span class="input-box-file-tit">
              * 첨부 파일
            </span>
            <input type="file">
          </li>
        </ul>
      </div>
    </article>
  </div>
<?php
include_once(G5_PATH.'/sub-tail.php');