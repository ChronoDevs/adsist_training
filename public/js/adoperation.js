$(function(){

  // テキスト、トリミング位置の操作
  $('.controller button').on('click', function(){
    var targetName = $(this).attr('name');
    var target = $(this).parents('.set_area').find('.' + targetName);
    var topValue = parseInt($(target).css('top'));
    var bottomValue = parseInt($(target).css('bottom'));
    var leftValue = parseInt($(target).css('left'));
    var rightValue = parseInt($(target).css('right'));
    var targetWidth = target.innerWidth();
    var targetHeight = target.innerHeight();
    var areaWidth = $(this).parents('.set_area').find('.slctdimg_cont').innerWidth();
    var areaHeight = $(this).parents('.set_area').find('.slctdimg_cont').innerHeight();

    switch ($(this).attr('class')) {
      case 'up_btn':
      if (bottomValue === 0) {
        $(target).css('bottom', 'auto');
        $(target).css('top', (areaHeight - targetHeight - 5) + 'px');
        return
      }
      if (topValue <= 5) {
        $(target).css('top', '0');
        return
      }
      $(target).css('bottom', 'auto');
      $(target).css('top', '-=5px');
      break;

      case 'down_btn':
      if (bottomValue <= 5) {
        $(target).css('bottom', '0');
        $(target).css('top', 'auto');
        return
      }
      $(target).css('top', '+=5px');
      break;

      case 'left_btn':
      if (rightValue === 0) {
        $(target).css('right', 'auto');
        $(target).css('left', (areaWidth - targetWidth - 5) + 'px');
        return
      }
      if (leftValue <= 5) {
        $(target).css('left', '0');
        return
      }
      $(target).css('right', 'auto');
      $(target).css('left', '-=5px');
      break;

      case 'right_btn':
      if (rightValue <= 5) {
        $(target).css('right', '0');
        $(target).css('left', 'auto');
        return
      }
      $(target).css('left', '+=5px');

    }
  });

  // フォントの切り替え
  $('.change_fonts button').on('click', function(){
    var targetName = $(this).attr('name');
    var target = $(this).parents('.set_area').find('.' + targetName);
    var fontFamily = $(this).css('font-family');
    $(target).css('font-family', fontFamily);
  });
});
