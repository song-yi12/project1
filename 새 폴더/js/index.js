window.addEventListener("wheel", (e) => {
    console.log(e.deltaY, e.deltaX);
    if (e.deltaY > 60) {
        $('.art-txt1').addClass('active');
        $('.art-txt2').addClass('active');
    }
    if (e.deltaY > 120) {
        $('.sec1').addClass('active');
    }
});
