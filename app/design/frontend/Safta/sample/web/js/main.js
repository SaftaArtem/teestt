jQuery(function($) {
// nice select
  $(document).ready(function() {
    $('select').niceSelect();
  });

// slick banner slider
  $('.banner-slider').slick({
    dots: true,
    // dotsClass: 'custom-dots',
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.pr-cards').slick({
    dots: true,
    dotsClass: 'pr-dots',
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [{
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

// $(function() {
  //   var show = $('#nav-bar-toggler');
  //     menu = $('.nav-bar-nav');
  //     menuHeight= menu.height();
  //
  //   $(show).on('click', function(e) {
  //     e.preventDefault();
  //     menu.slideToggle();
  //   });
  //
  //   $(window).resize(function() {
  //     var w = $(window).width();
  //     if(w > 992 && menu.is(':hidden')) {
  //       menu.removeAttr('style');
  //     }
  //   });
  // });
});

// Timer Lounch
  function timer() {
    var nowDate = new Date();
    var achiveDate = new Date(2018,5,16,22,0,0); //Задаем дату, к которой будет осуществляться обратный отсчет
    var result = (achiveDate - nowDate)+1000;
    if (result < 0) {
        var elmnt = document.getElementById('timer');
        elmnt.innerHTML = ' - : - - : - - : - - ';
        return undefined;
    }
    var seconds = Math.floor((result/1000)%60);
    var minutes = Math.floor((result/1000/60)%60);
    var hours = Math.floor((result/1000/60/60)%24);
    var days = Math.floor(result/1000/60/60/24);
    if (seconds < 10) seconds = '0' + seconds;
    if (minutes < 10) minutes = '0' + minutes;
    if (hours < 10) hours = '0' + hours;
    var elmnt = document.getElementById('timer');
    elmnt.innerHTML = '<ul class="count"><li><span class="count-item">'+days+'</span><span class="count-capt">days</span></li><li><span class="count-item">'+hours+'</span><span class="count-capt">hours</span></li><li><span class="count-item">'+minutes+'</span><span class="count-capt">minutes</span></li><li><span class="count-item">'+seconds+'</span><span class="count-capt">seconds</span></li></ul>';

    setTimeout(timer, 1000);
  }
  window.onload = function() {
      timer();
  }
