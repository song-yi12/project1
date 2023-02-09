<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head2.php');
?>
  <nav class="hidden">메인 콘텐츠</nav>
  <h3 class="tip-tit"><strong>PALGONGTEA</strong> 주문 TIP</h3>
  <p class=tip-desc>맛있는 음료를 주문하기 위한 TIP입니다</p>
  <article class="tip-step1 tip-step">
    <p class="step1-tit tip-step-tit">STEP1. <strong>MENU</strong></p>
    <span class="step1-desc tip-step-desc">맛있는 팔공티 메뉴를 선택해 주세요.</span>
    <ul class="step1-menulist">
      <li>
        <p class="step1-menu-name">오리지널 밀크티</p>
        <em class="step1-menu-engname">Original Milk Tea</em>
      </li>
      <li>
        <p class="step1-menu-name">블렌디드 밀크티</p>
        <em class="step1-menu-engname">Blendid Milk Tea</em>
      </li>
      <li>
        <p class="step1-menu-name">오리지널 티</p>
        <em class="step1-menu-engname">Original Tea</em>
      </li>
      <li>
        <p class="step1-menu-name">커피</p>
        <em class="step1-menu-engname">Coffee</em>
      </li>
      <li>
        <p class="step1-menu-name">프룻티</p>
        <em class="step1-menu-engname">Fluit Tea</em>
      </li>
      <li>
        <p class="step1-menu-name">스무디</p>
        <em class="step1-menu-engname">Smoothie</em>
      </li>
      <li>
        <p class="step1-menu-name">논커피</p>
        <em class="step1-menu-engname">Beverage</em>
      </li>
      <li>
        <p class="step1-menu-name">에이드</p>
        <em class="step1-menu-engname">Aid</em>
      </li>
    </ul>
  </article>
  <article class="tip-step2 tip-step">
    <p class="step2-tit tip-step-tit">STEP 2. <strong>HOT/ICE</strong></p>
    <span class="step2-desc tip-step-desc">HOT 또는 ICE를 선택해 주세요.</span>
    <article class="step2-ice">
      <strong class="step2-ice-tit">ICE MILK TEA</strong>
      <span class="step2-ice-desc"><em>ICE MILK TEA</em>는<br>기본 펄이 제공됩니다</span>
      <em class="step2-ice-txt">(ICE MILK TEA 외 음료에는 기본 펄이 제공되지 않습니다)</em>
      <p>기본 펄 있음</p>
    </article>
    <article class="step2-hot">
      <strong class="step2-hot-tit">HOT MILK TEA</strong>
      <span class="step2-hot-desc"><em>HOT MILK TEA</em>는 기본 펄이 없으며<br>주문 시 타피오카 추가가 가능합니다.</span>
      <em class="step2-hot-txt">(원하시는 분은 펄 추가 +500원으로 제공됩니다)</em>
      <p>펄 추가 시 +500원</p>
    </article>
  </article>
  <article class="tip-step3 tip-step">
    <p class="step3-tit tip-step-tit">STEP 3. <strong>TOPPING</strong></p>
    <span class="step3-desc tip-step-desc">토핑 추가 옵션을 선택해 주세요.</span>
    <ul class="step3-menulist">
      <li>
        <p class="step3-topping-name">헤이즐넛 시럽</p>
        <em class="step3-topping-engname">Hazelnut Syrup</em>
        <span class="step3-topping-desc">헤이즐넛 향이 풍부한 시럽으로<br>고소한 풍미가 한층 UP</span>
      </li>
      <li>
        <p class="step3-topping-name">크림치즈폼</p>
        <em class="step3-topping-engname">Cream Cheese Foam</em>
        <span class="step3-topping-desc">풍부한 크림치즈의<br>풍미와 쫀득함이 매력</span>
      </li>
      <li>
        <p class="step3-topping-name">휘핑크림</p>
        <em class="step3-topping-engname">Whipped Cream</em>
        <span class="step3-topping-desc">새하얗고 달콤한 크림을<br>듬뿍 얹어 즐겨 보세요</span>
      </li>
      <li>
        <p class="step3-topping-name">에스프레소</p>
        <em class="step3-topping-engname">Espresso</em>
        <span class="step3-topping-desc">더욱 더 깊은 커피의 맛을<br>즐기고자 한다면 샷 추가</span>
      </li>
      <li>
        <p class="step3-topping-name">타피오카펄</p>
        <em class="step3-topping-engname">Tapioca Pearl</em>
        <span class="step3-topping-desc">쫀득쫀득하고 달콤한<br>타피오카펄을 넣어 보세요</span>
      </li>
      <li>
        <p class="step3-topping-name">코코넛펄</p>
        <em class="step3-topping-engname">Cocounut Pearl</em>
        <span class="step3-topping-desc">쫄깃쫄깃하고 달달한<br>코코넛펄 추가는 필수!</span>
      </li>
      <li>
        <p class="step3-topping-name">알로에펄</p>
        <em class="step3-topping-engname">Aloe Pearl</em>
        <span class="step3-topping-desc">달콤하고 아삭한 식감의<br>알로에펄을 빼놓을 수 없죠</span>
      </li>
      <li>
        <p class="step3-topping-name">곤약펄</p>
        <em class="step3-topping-engname">Konjac Pearl</em>
        <span class="step3-topping-desc">쫄깃한 식감과 식이섬유가 듬뿍!<br>인기만점 곤약 젤리</span>
      </li>
    </ul>
  </article>
  <article class="tip-step4 tip-step">
    <p class="step4-tit tip-step-tit">STEP 4. <strong>ICE/SWEET</strong></p>
    <span class="step4-desc tip-step-desc">얼음 양과 당도를 선택해 주세요.</span>
    <article class="step4-txt-box">
      <p class="step4-txt">옵션을 선택하지 않으시는 경우 기본 옵션으로 제공됩니다.<br>선택하시는 얼음 양과 관계없이 제공되는 음료의 양은 동일합니다.</p>
    </article>
    <article class="step4-ice-box step4-box">
      <p>얼음 선택</p>
      <ul>
        <li>조금</li>
        <li>기본</li>
        <li>가득</li>
      </ul>
    </article>
    <article class="step4-sweet-box step4-box">
      <p>당도 선택</p>
      <ul>
        <li class="step4-sweet">0%</li>
        <li class="step4-sweet">25%</li>
        <li class="step4-sweet">50%</li>
        <li class="step4-sweet">75%</li>
        <li class="step4-sweet">100%</li>
      </ul>
      <em>거의 달지 않은 맛</em>
      <em>가장 단 맛</em>
    </article>
  </article>
<?php
include_once(G5_PATH.'/sub-tail.php');