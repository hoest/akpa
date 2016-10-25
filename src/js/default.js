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

/**
* Functie die klikken op een uitgaande link in Analytics bijhoudt.
* Deze functie vereist een geldige URL-tekenreeks als argument en gebruikt de betreffende URL-tekenreeks
* als eventlabel. Wanneer de methode 'transport' wordt ingesteld op 'beacon', wordt de hit verzonden
* bij gebruik van 'navigator.sendBeacon' in de browser die dat ondersteunt.
*/
var trackOutboundLink = function(url) {
  ga('send', 'event', 'outbound', 'click', url, {
    'transport': 'beacon',
    'hitCallback': function() {
      document.location = url;
    }
  });
};

$(function() {
  $('nav .logo a, nav .main a').on('click', function() {
    scroll($(this).attr('href'));
    return false;
  });

  $("a[href^='http'],a[href^='mailto']").each(function() {
    var link = $(this);
    link.on('click', function() {
      trackOutboundLink(this.href);
      return false;
    });
  });
});
