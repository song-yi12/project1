<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

  <link rel="stylesheet" href="/css/sub2-common.css">
  <link rel="stylesheet" href="/css/sub2-1-index.css">
  <link rel="stylesheet" href="/css/sub2-2-index.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  

  <script src="https://kit.fontawesome.com/979b8c848e.js" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<!-- 상단 시작 { -->

<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
<header id="header">
  <div class="inner">
    <h1 class="logo"><a href="/index.php">logo</a></h1>
    <ul class="gnb">
      <li class="depth1"><a href="/sub/sub1-1.php">브랜드소개</a>
        <ul class="depth2">
          <li><a href="/sub/sub1-1.php">팔공티소개</a></li>
          <li><a href="/sub/sub1-2.php">연혁</a></li>
          <li><a href="/sub/sub1-3.php">오시는길</a></li>
          <li><a href="/sub/sub1-4.php">해외사업</a></li>
        </ul>
      </li>
      <li class="depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery">메뉴</a>
        <ul class="depth2">
          <li><a href="/sub/sub2-1.php">주문TIP</a></li>
          <li><a href="/sub/sub2-2.php">티 컬렉션</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season">시즌메뉴</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery">음료</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=dessert">디저트</a></li>
        </ul>
      </li>
      <li class="depth1"><a href="/sub/sub3-1.php">창업문의</a>
        <ul class="depth2">
          <li><a href="/sub/sub3-1.php">가맹절차</a></li>
          <li><a href="/sub/sub3-2.php">인테리어</a></li>
          <li><a href="/sub/sub3-3.php">가맹비용</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=basic_qa">상담 신청</a></li>
        </ul>
      </li>
      <li class="depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map">매장안내</a>
        <ul class="depth2">
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map">국내매장</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=global">해외매장</a></li>
        </ul>
      </li>
      <li class="depth1"><a href="/sub/sub5-1.php">멤버십</a>
        <ul class="depth2">
          <li><a href="/sub/sub6-1.php">팔공티APP</a></li>
        </ul>
      </li>
      <li class="depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=notice">팔공티소식</a>
        <ul class="depth2">
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=notice">공지사항</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=event">이벤트</a></li>
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=news">뉴스</a></li>
        </ul>
      </li>
      <li class="depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=brand">고객문의</a>
        <ul class="depth2">
          <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=brand">브랜드제휴</a></li>
        </ul>
      </li>
    </ul>
    <div class="tnb">
      <ul class="login-box">        
        <?php if ($is_member) {  ?>
        <li class="retouch"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
        <li class="logout"><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
        <?php if ($is_admin) {  ?>
        <li class="admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
        <?php }  ?>
        <?php } else {  ?>
        <li class="join"><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
        <li class="login"><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
        <?php }  ?>
      </ul>
      <nav class="allmenu">
        <span>allmenu</span>
        <span>allmenu</span>
        <span>allmenu</span>
        <span>allmenu</span>
      </nav>
      <div class="allmenu-wrap">
        <ul class="allmenu-box">All Menu
          <li class="allmenu-depth1"><a href="#">브랜드 소개</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="/sub/sub1-1.php">팔공티 소개</a></li>
              <li><a href="/sub/sub1-2.php">연혁</a></li>
              <li><a href="/sub/sub1-3.php">오시는 길</a></li>
              <li><a href="/sub/sub1-4.php">해외 사업</a></li>
            </ul>
          </li>
          <li class="allmenu-depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery">메뉴</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="/sub/sub2-1.php">주문 TIP</a></li>
              <li><a href="/sub/sub2-2.php">티 컬렉션</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season">시즌메뉴</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=dessert">디저트</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery">음료</a></li>
            </ul>
          </li>
          <li class="allmenu-depth1"><a href="/sub/sub3-1.php">창업 문의</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="/sub/sub3-1.php">가맹 절차</a></li>
              <li><a href="/sub/sub3-2.php">인테리어</a></li>
              <li><a href="/sub/sub3-3.php">가맹 비용</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=basic_qa">상담 신청</a></li>
            </ul>
          </li>
          <li class="allmenu-depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map">매장 안내</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=map">국내 매장</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=global">해외 매장</a></li>
            </ul>
          </li>
          <li class="allmenu-depth1"><a href="/sub/sub5-1.php">멤버쉽</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="/sub/sub6-1.php">팔공티 APP</a></li>
            </ul>
          </li>
          <li class="allmenu-depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=notice">팔공티 소식</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=notice">공지사항</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=event">이벤트</a></li>
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=news">뉴스</a></li>
            </ul>
          </li>
          <li class="allmenu-depth1"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=brand">고객 문의</a><i class="fa-solid fa-angle-up"></i>
            <ul class="allmenu-depth2">
              <li><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=brand">브랜드 제휴</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
<main id="main">
  <h2 class="hidden">메인 콘텐츠</h2>
  <section class="visual">
    <div class="inner">
      <p class="visual-txt">메뉴</p>
    </div>
  </section>
  <nav class="lnb">
    <div class="inner">
      <ul class="lnb-menu">
        <li class="lnb-menu1-current"><a href="/sub/sub2-1.php">주문 TIP</a></li>
        <li class="lnb-menu2-current"><a href="/sub/sub2-2.php">티 컬렉션</a></li>
        <li class="lnb-menu3-current"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=Season">시즌메뉴</a></li>
        <li class="lnb-menu4-current"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=gallery">음료</a></li>
        <li class="lnb-menu4-current"><a href="http://lee-song-yi.pe.kr/bbs/board.php?bo_table=dessert">디저트</a></li>
      </ul>
    </div>
  </nav>
  <section class="palgongtea-menu inner">