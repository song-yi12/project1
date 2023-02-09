$(function(){
    /* scroll event */
    let scroll = '';
    $(window).on('scroll' , function(){
      scroll = $(window).scrollTop();

      if(scroll > 1100){
        $('.art-txt1, .art-txt2, .page-sec2, .page-sec1').addClass('active');
        $('p').filter('.main').hide();
        $('p').filter('.greetings').show();
      }
      else{
        $('.art-txt1, .art-txt2, .page-sec1, .page-sec2').removeClass('active');
        $('p').filter('.main').show();
        $('p').filter('.greetings').hide();
      }
      if(scroll > 2200){
        $('.sec1, .sec2').addClass('active');
        $('.art-txt1, .art-txt2, .scroll-down').addClass('on');
        $('.page-sec2').removeClass('active');
        $('.page-sec3').addClass('active');
        $('p').filter('.greetings').hide();
        $('p').filter('.introduce').show();
      }
      else{
        $('.sec1, .sec2').removeClass('active');
        $('.art-txt1, .art-txt2, .scroll-down').removeClass('on');
        $('.page-sec3').removeClass('active');
        $('p').filter('.introduce').hide();
      }
      if(scroll > 3300){
        $('.sec2-wrap').addClass('active');
      }
      else{
        $('.sec2-wrap').removeClass('active');
      }
      if(scroll > 4400){
        $('.sec2-wrap').addClass('on');
      }
      else{
        $('.sec2-wrap').removeClass('on');
      }
      if(scroll > 5500){
        $('.sec1, .sec2').addClass('on');
        $('.sec3, .page-sec4').addClass('active');
        $('.page-sec3').removeClass('active');
        $('.cube-wrap').addClass('view');
        $('p').filter('.introduce').hide();
        $('p').filter('.project').show();
      }
      else{
        $('.sec1, .sec2').removeClass('on');
        $('.sec3, .page-sec4').removeClass('active');
        $('.cube-wrap').removeClass('view');
        $('p').filter('.project').hide();
      }
      if(scroll > 6600){
        $('.cube-wrap').addClass('active');
        $('.front, .bottom').addClass('opacity');
      }
      else{
        $('.cube-wrap').removeClass('active');
        $('.front, .bottom').removeClass('opacity');
      }
      if(scroll > 7700){
        $('.cube-wrap').addClass('on');
        $('.bottom').removeClass('opacity');
        $('.back').addClass('opacity');
      }
      else{
        $('.cube-wrap').removeClass('on');
        $('.back').removeClass('opacity');
      }
      if(scroll > 8800){
        $('.cube-wrap').addClass('rotate');
        $('.back').removeClass('opacity');
        $('.right').addClass('opacity');
      }
      else{
        $('.cube-wrap').removeClass('rotate');
        $('.right').removeClass('opacity');
      }
      if(scroll > 9900){
        $('.cube-wrap').addClass('rotate2');
        $('.right').removeClass('opacity');
        $('.top').addClass('opacity');
      }
      else{
        $('.cube-wrap').removeClass('rotate2');
        $('.top').removeClass('opacity');
      }
      if(scroll > 11000){
        $('.cube-wrap').addClass('rotate3');
        $('.top').removeClass('opacity');
        $('.left').addClass('opacity');
      }
      else{
        $('.cube-wrap').removeClass('rotate3');
        $('.left').removeClass('opacity');
      }
      if(scroll > 12100){
        $('.sec-art, .graphic-wrap-photo, .graphic-wrap-hover').addClass('on');
        $('.cube-wrap, .sec1').addClass('hide');
      }
      else{
        $('.sec-art, .graphic-wrap-photo, .graphic-wrap-hover').removeClass('on');
        $('.cube-wrap, .sec1').removeClass('hide');
      }
      if(scroll > 13200){
        $('.contact-page').addClass('active');
        $('.page-wrap-hide').hide(100);
        $('#back-arrow, .back-name').show(100);
      }
      else{
        $('.contact-page').removeClass('active');
        $('.page-sec').show(100);
        $('.page-wrap-hide').show(100);
        $('#back-arrow, .back-name').hide(100);
      }
    });
    /* click event */
    let $btn = $('.cube-btn');
    $btn.on('click' , function(){
      $('.cube-btn').removeClass('active');
      $('this').addClass('active');
    });
    $('.navigator').on('click',function(){
      $('.page').toggleClass('on');
    });

    /* mousemove event */
    let docStyle = document.documentElement.style;
    document.addEventListener('mousemove', function(e) {
        docStyle.setProperty('--mouse-x', e.clientX);
        docStyle.setProperty('--mouse-y', e.clientY);
    });
    const mouseFunc = (e) =>{
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
    }
    window.onload = () =>{ 
        rocket = document.getElementsByClassName("art-txt-rocket")[0];
        cursor = document.getElementsByClassName("cursor-style")[0];
        document.addEventListener("mousemove", mouseFunc);
        setTimeout(function(){
        scrollTo(0,0);
        }, 100);
    }

    /* pagination click event */
    const $g = $('g');
    let gIndex = '';
    let secOffset = '';
    
    $g.on('click', function () {
      gIndex = $(this).index() -1;
      secOffset = gIndex * 1100;
      $('html , body').animate(
        {
          scrollTop: secOffset,
        },
        100
        );
      });
      
    const $li = $('.gnb-wrap > li');
    let liIndex = '';

    $li.on('click', function () {
      liIndex = $(this).index();
      secOffset = liIndex * 2200;
      $('html , body').animate(
        {
          scrollTop: secOffset,
        },
        100
      );
    });
    /* contact-page click event */
    $('.popup-btn').on('click' , function(){
      $('.popup').hide(100);
    });
    /* contact-page click event */
    $('.contact').on('click' , function(){
      secOffset = 13300;
      $('html , body').animate(
        {
        scrollTop:  secOffset,
      }
      ,
      );
    });

    /* back-page click event */
    $('.back-page').on('click' , function(){
      secOffset = 12200;
      $('html , body').animate(
        {
        scrollTop:  secOffset,
      }
      ,100
      );
      $('.page-sec, .project').show(100);
      $('#back-arrow, .back-name').hide(100);
    });
    /* all-menu click event */
    $('.all-menu-btn').on('click' , function(){
      $('.all-menu-btn').toggleClass('active');
    });
    /* all-menu-li click event */
    const $allMenuLi = $('.all-menu-li > li');
    let allMenuLiIndex = '';
    let secOffset2 = '';
  
    $allMenuLi.on('click', function () {
      allMenuLiIndex = $(this).index() +1;
      secOffset2 = allMenuLiIndex * 4100;
      console.log(allMenuLiIndex);
      $('html , body').animate(
        {
          scrollTop: secOffset2,
        },
        100
      );
      $('.all-menu-btn').removeClass('active');
    });
    /* mouseover event */
    $('.cube-img-txt').on('mouseover' , function(){
      $(this).css({
        'opacity':'1',
      },500)
    });
    $('.cube-img-txt').on('mouseout' , function(){
      $(this).css({
        'opacity':'0',
      },500)
    });
});
  