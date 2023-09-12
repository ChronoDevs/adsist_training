(function() {
  "use strict";

  // ページの最低縦幅を指定
  var setMinHeight = function(){
    var footer = document.getElementsByTagName('footer');
    var footerHeight = footer[0].clientHeight;
    var winHeight = window.innerHeight;
    var wrapper = document.getElementById('wrapper');
    var sidebar = document.getElementById('sidebar');
    wrapper.style.minHeight = (winHeight - footerHeight) + 'px';
    if (sidebar) {
      sidebar.style.minHeight = (winHeight - footerHeight) + 'px';
    }
  }
  setMinHeight();
  window.addEventListener('resize', function(){
    setMinHeight();
  });
})();
