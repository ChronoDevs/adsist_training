$(function(){

  //////////////////// グラフ作成 ////////////////////

  // 横軸のラベルだけ最初に指定
  var labels = ['M', 'T', 'W', 'T', 'F', 'S', 'S'];

  // SP時のグラフの横幅指定
  var setGraphWidth = function() {
    var labelsLength = labels.length;
    var winWidth = $(window).innerWidth();
    if (winWidth <= 768) {
      $('.rsltgraph_cont').css('width', (labelsLength * 80) + 'px');
    } else {
      $('.rsltgraph_cont').css('width', 'auto');
    }
  }
  setGraphWidth();
  $(window).resize(function(){
    setGraphWidth();
  });

  // グラフ生成
  var ctx = document.getElementById('myChart').getContext('2d');
  Chart.defaults.global.defaultFontColor = 'black';
  Chart.defaults.global.defaultFontFamily = "'Noto Sans Japanese', 'Avenir Next', 'Yu Gothic Medium','游ゴシック Medium', YuGothic, '游ゴシック体', 'ヒラギノ角ゴ Pro W3', 'メイリオ', sans-serif";
  Chart.defaults.global.defaultFontStyle = 'bold'
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'クリック数',
        data: [12, 19, 3, 17, 6, 3, 7],
        backgroundColor: "rgba(194,225,22,0.4)",
        pointRadius: 5,
        pointBorderWidth: 1,
        pointBorderColor: "#fff",
        pointBackgroundColor: "rgba(194,225,22)",
        borderColor: "rgba(194,225,22)"
      }, {
        label: '獲得数',
        data: [2, 29, 5, 5, 2, 3, 10],
        backgroundColor: "rgba(246, 173, 72,0.4)",
        pointRadius: 5,
        pointBorderWidth: 1,
        pointBorderColor: "#fff",
        pointBackgroundColor: "rgb(246, 173, 72)",
        borderColor: "rgb(246, 173, 72)"
      },{
        label: '表示件数',
        data: [1, 19, 6, 9, 15, 17, 1],
        backgroundColor: "rgba(52,152,219,0.4)",
        pointRadius: 5,
        pointBorderWidth: 1,
        pointBorderColor: "#fff",
        pointBackgroundColor: "rgb(52,152,219)",
        borderColor: "rgb(52,152,219)"
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{ticks: {mirror: true}}]
      }
    }
  });

  // SP時の「横スクロールできます」表示切り替え
  $('.rsltgraph_cont, .notice_scroll').on('touchmove', function(){
    $('.notice_scroll').fadeOut(500);
  });
  $(window).resize(function(){
    if($(window).innerWidth() <= 768) {
      $('.notice_scroll').show();
    }
  });


});
