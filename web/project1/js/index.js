
// 문서의 내용이 모두 로드되면 할일
// 대상.addEventListener('이벤트 종류',할일);
// DOMContentLoaded
// 할일 = 함수 = function(){ 실제로 할 일 }

document.addEventListener('DOMContentLoaded',function(){ 

    // 클래스명 infra-slide 변수명 $infraslide
    // 클래스명 infra-slide-wrap 변수명 $infraslidewrap
    // 클래스명 infra-article-slide 변수명 $infraarticleslide
    // 이전 버튼 변수명 $infrabtnprev
    // 다음 버튼 변수명 $infrabtnnext

    var $infraslide = document.querySelector('.infra-slide'),
    $infraslidewrap = document.querySelector('.infra-slide-wrap'),
    $infrabgslide = document.querySelector('.infra-bg-slide'),

    $bgslide = document.querySelectorAll('.bg-slide'),
    $infraarticleslide = document.querySelectorAll('.infra-article-slide'),

    $infrabtnprev = document.querySelector('.infra-btn-prev'),
    $check_aticle_btn_prev = document.querySelector('.check-aticle-btn-prev'),

    $check_sec = document.querySelector('.check-sec'),
    $check_wrap = document.querySelector('.check-wrap'),
    $check_aticle = document.querySelectorAll('.check-aticle'),

    $infraarticleslideHeight = 0, /* 슬라이드 높이값 */
    $bgslideHeight = 0, /* 슬라이드 높이값 */
    $check_aticleHeight = 0, /* 슬라이드 높이값 */

    $infraarticleslideCount = $infraarticleslide.length, /* ??? */
    $bgslideCount = $bgslide.length,
    $check_aticleCount = $check_aticle.length,

    $currentIndex = 0, /* 처음 보고 있는 페이지 */
    $checkIndex = 0,
    $infrabtnnext = document.querySelector('.infra-btn-next'),
    $check_aticle_btn_next = document.querySelector('.check-aticle-btn-next');


    // 슬라이드 중 길이가 가장 긴 슬라이드의 높이값을 모두에게 지정
    for(var i = 0; i < $infraarticleslideCount ; i++){
        if($infraarticleslideHeight < $infraarticleslide[i].offsetHeight){
            $infraarticleslideHeight = $infraarticleslide[i].offsetHeight;
        }
    }
    for(var f = 0; f < $bgslideCount ; f++){
        if($bgslideHeight < $bgslide[f].offsetHeight){
            $bgslideHeight = $bgslide[f].offsetHeight;
        }
    }
    for(var e = 0; e < $check_aticleCount ; e++){
        if($check_aticleHeight < $check_aticle[e].offsetHeight){
            $check_aticleHeight = $check_aticle[e].offsetHeight;
        }
    }

    // 부모의 높이값을 자식의 높이값으로 지정
    $infraslidewrap.style.height = $infraarticleslideHeight + 'px';
    $infraslide.style.height = $infraarticleslideHeight + 'px';
    $infrabgslide.style.height = $bgslideHeight + 'px';
    $check_wrap.style.height = $check_aticleHeight + 'px';
    $check_sec.style.height = $check_aticleHeight + 'px';

    // 슬라이드들을 가로로 나열. 포지션을 줬기 때문에 100%만큼 left 이동.
    for(var a = 0; a < $infraarticleslideCount; a++){
        $infraarticleslide[a].style.left = a * 100 + '%';
    }

    // 가로로 나열하는데 100% 주면 자꾸 부모값만큼 이동한다. 그래서 마진값을 포함한 가로 길이만큼 이동.
    for(var b = 0; b < $bgslideCount; b++){
        $bgslide[b].style.left = b * 305 + 'px';
    }

    // 슬라이드들을 가로로 나열. 포지션을 줬기 때문에 100%만큼 left 이동.
    for(var c = 0; c <  $check_aticleCount; c++){
        $check_aticle[c].style.left = c * 100 + '%';
    }

    // 슬라이드 이동 함수
    function goToSlide(idx){
        $infraslidewrap.style.left = -465 * idx + 'px';
        $infrabgslide.style.left = -305 * idx + 'px';
        $currentIndex = idx;
    }
    function goToSlide_2(idx){
        $check_wrap.style.left = -1200 * idx + 'px';
        $checkIndex = idx;
    }
    // 클릭 시 행동
    $infrabtnprev.addEventListener('click',function(){

        if($currentIndex == 0){
            goToSlide($infraarticleslideCount - 1);
        }else{
            goToSlide($currentIndex - 1);
        }
    });
    $infrabtnnext.addEventListener('click',function(){


        if($currentIndex == $infraarticleslideCount - 1){
            goToSlide(0);
        }else{
            goToSlide($currentIndex + 1);
        }
    });
    $check_aticle_btn_prev.addEventListener('click',function(){
    
        if($checkIndex == 0){
            goToSlide_2($check_aticleCount - 1);
        }else{
            goToSlide_2($checkIndex - 1);
        }
    });
    $check_aticle_btn_next.addEventListener('click',function(){
    
        if($checkIndex == $check_aticleCount - 1){
            goToSlide_2(0);
        }else{
            goToSlide_2($checkIndex + 1);
        }
    });
});

