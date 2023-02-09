$(function(){
  //scrollTop() : 소활호에 내용 없으면 get, 내용이 있으면 set
  let scroll = '';
  $(window).on('scroll' , function(){
    scroll = $(window).scrollTop();
    console.log(scroll);
    if(scroll > 500){
      $('.sol-img').addClass('on');
      $('.sol-text-wrap').addClass('on');
      $('.sol-quick').addClass('on');
      $('.solution .sec-header').addClass('on');
    }else{
      $('.sol-img').removeClass('on');
      $('.sol-text-wrap').removeClass('on');
      $('.sol-quick').removeClass('on');
      $('.solution .sec-header').removeClass('on');
    }
    if(scroll > 1600){
      $('.collect').addClass('on');
      $('.collect-box').addClass('on');
    }else{
      $('.collect').removeClass('on');
      $('.collect-box').removeClass('on');
    }
    if(scroll > 2400){
      $('.multi').addClass('on');
    }else{
      $('.multi').removeClass('on');
    }
    if(scroll > 3290){
      $('.lounge .sec-header').addClass('on');
    }else{
      $('.lounge .sec-header').removeClass('on');
    }
  });
});
