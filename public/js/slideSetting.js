var swiper = new Swiper('.swiper-container', {
  effect: 'slide',
  direction: 'horizontal',
  loop: true,
  slidesPerView: 3,
  spaceBetween: 30,
  simulateTouch: false,
  navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  breakpoints: {
    768: {
      slidesPerView: 2,
      centeredSlides : true,
      simulateTouch: true,
    },
    450: {
      slidesPerView: 1.5,
      centeredSlides : true,
      simulateTouch: true,
    }
  }
});
$(function(){

  // 画像を正方形に繰り抜く処理
  var setImgsize = function() {
    var slide = $('.swiper-slide');
    var imgBox = $('.fitimg');
    var img = $('.fitimg img');
    for (var i = 0; i < img.length; i++) {
      var slideWidth = slide.eq(i).innerWidth();
      imgBox.eq(i).innerWidth(slideWidth);
      imgBox.eq(i).innerHeight(slideWidth);
      var imgWidth = img.eq(i).innerWidth();
      var imgHeight = img.eq(i).innerHeight();
      if(imgWidth >= imgHeight) {
        img.eq(i).css('width', 'auto').css('height', 100 + '%');
      } else {
        img.eq(i).css('height', 'auto').css('width', 100 + '%');
      }
    }
  }

  // SPでアクティブな画像を大きく表示させる処理
  var slideSize = $('.swiper-slide').innerWidth();
  var setActiveSlideSize = function(){
    if ($(window).innerWidth() > 768) {
      setImgsize();
      return;
    }
    var activeSlideSize = slideSize * 1.243;
    setTimeout(function(){
      $('.swiper-slide').innerWidth(slideSize);
      $('.swiper-slide-active').innerWidth(activeSlideSize);
      $('.swiper-slide').css('bottom', 0 + 'px');
      $('.swiper-slide-active').css('bottom', (activeSlideSize - slideSize)/2 + 'px');
      $('.swiper-container').css({
        'cssText': 'right:' + (activeSlideSize - slideSize)/2 + 'px !important;'
      });
      setImgsize();
    },0);
  }
  setActiveSlideSize();
  $(window).resize(function(){
    slideSize = $('.swiper-slide').innerWidth();
    setActiveSlideSize();
  });
  $('.swiper-slide').on('touchstart touchmove touchend', function(){
    setActiveSlideSize();
  });

});
