$(function(){
  $(document).on('click', function(event) {
    for (var i = 0; i < $(".helpballoon").length; i++) {
      var balloon = $(".helpballoon").eq(i);
      var balloonBtn = $('.balloon_btn').eq(i);
      if (!$(event.target).closest(balloon).length && balloon.hasClass("open")) {
        balloon.toggleClass("open");
        balloonBtn.toggleClass("open");
      } else if ($(event.target).is(balloonBtn)) {
        balloon.toggleClass("open");
        balloonBtn.toggleClass("open");
      }
    }
  });
});
