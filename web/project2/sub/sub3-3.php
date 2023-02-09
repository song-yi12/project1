<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head3.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <h3 class="cost-tit"><strong>PALGONGTEA</strong> 가맹 비용</h3>
  <article class="cost-table-wrap">
    <table class="cost-table">
      <caption class="cost-graph-tit">창업 비용</caption>
      <span class="cost-table-txt">(단위/만원)</span>
      <thead class="cost-graph">
        <tr>
          <th>구분</th>
          <th>비고 (기준 평수:33 ㎡ 이하 / 10평 이하)</th>
          <th>금액</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>가맹비</th>
          <td>상표권, 영업권 비용</td>
          <td>500</td>
        </tr>
        <tr>
          <th>보증금</th>
          <td>계약이행 및 물품대금납부 보증금 가맹 계약종료시 반환</td>
          <td>500</td>
        </tr>
        <tr>
          <th>교육비</th>
          <td>본사 제품제조 교육 및 실습 교육</td>
          <td>300</td>
        </tr>
        <tr>
          <th>인테리어(내부)</th>
          <td>매장 기본 공사 (설계 / 감리 / 시공)	</td>
          <td>3000</td>
        </tr>
        <tr>
          <th>주방기기</th>
          <td>냉장/냉동고, 제빙기, 음료 스테이션, 에스프레소 머신, 티 브루어 머신</td>
          <td>3000</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2">TOTAL</td>
          <td>7100(VAT 별도)</td>
        </tr>
      </tfoot>
    </table>
  </article>
<?php
include_once(G5_PATH.'/sub-tail.php');