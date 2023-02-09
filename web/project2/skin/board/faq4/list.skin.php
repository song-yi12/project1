<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<link rel="stylesheet" href="<?php echo $board_skin_url;?>/style.css">
<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">
<!-- <h4 class="mb-20">FAQ(자주묻는질문)</h4> -->

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
      <h3 id="bo_btn_tit_global">GLOBAL MARKET</h3>
      <p>PALGONGTEA의 세계 지점 안내입니다.</p>
      <div id="bo_list_total">

      </div>

        <?php if ($rss_href || $write_href) { ?>
          <ul class="btn_bo_user">
              <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
              <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn">관리자</a></li><?php } ?>
              <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"> 글쓰기</a></li><?php } ?>
          </ul>
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <div  class="faq">
       <ul class="faq-accordion">
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
         <li>
             <a href="#"><?php echo $list[$i]['subject'] ?></a>
             <ul class="faq-content">
                 <li>
                     <div><p class="answer">
                <?php if($is_admin == 'super'){?>
                  <a href="<?php echo $list[$i]['href'] ?>" class="btn_admin btn faq-btn">수정</a>
                <?php }?>

                    <?php echo $list[$i]['wr_content'] ?>
                  </p></div>
              </li>
            </ul>
        </li>
        <?php } ?>
      </ul>
      <div id="faq-map">
        <p id="faq-map1">캐나다</p>
        <p id="faq-map2">미국</p>
        <p id="faq-map3">오세아니아</p>
      </div>
    </div>

    <?php if ($list_href || $write_href) { ?>

        <?php } ?>
      <!-- 페이지 -->
      <?php echo $write_pages;  ?>

       <!-- 게시판 검색 시작 { -->
    <div id="bo_sch">
        <legend>게시물 검색</legend>

        <form name="fsearch" method="get">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sop" value="and">
        <label for="sfl" class="sound_only">검색대상</label>
        <select name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
        </select>
        <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
        <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
        </form>
    </div>
    <!-- } 게시판 검색 끝 -->
</div>



<!-- } 게시판 목록 끝 -->
<script>
var accordWithPage =  function() {

//Accordion

$(function () {

  var expand = 'expanded';
  var content = $('.faq-content');
        //FAQ Accordion
        $('.faq-accordion > li > a').click(function (e) {
        		e.preventDefault();
        if ($(this).hasClass(expand)) {
            $(this).removeClass(expand);
//          $('.faq-accordion > li > a > div').not(this).css('opacity', '1');//returns li back to normal state
            $(this).parent().children('ul').stop(true, true).slideUp();
        } else {
//            $('.faq-accordion > li > a > div').not(this).css('opacity', '0.5');//dims inactive li
            $('.faq-accordion > li > a.expanded').removeClass(expand);
            $(this).addClass(expand);
            content.filter(":visible").slideUp();
            $(this).parent().children('ul').stop(true, true).slideDown();
        }
    }); //accordion function

    content.hide();

});

}

accordWithPage();

</script>
