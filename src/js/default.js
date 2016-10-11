$(window).on('scroll', function() {
  if($('body').scrollTop() > $('header').outerHeight(true) + 50) {
    $('body').addClass('scroll');
  }
  else {
    $('body').removeClass('scroll');
  }
});

var scroll = function(id) {
  var targetTop = id === '/' ? 0 : $(id).offset().top;
  $('html, body').animate({
    scrollTop: targetTop
  }, 1000);
};

$(function() {
  $('nav .logo a, nav .main a').on('click', function() {
    scroll($(this).attr('href'));
    return false;
  });
});
