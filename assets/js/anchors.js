(function($) {
  $( document ).ready(function() {
    if ($(window).width() < 480) {
      var anchorOffset = 0
    } else {
      var anchorOffset = 70
    }

    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - anchorOffset
          }, 1000);
          return false;
        }
      }
    });
  })
})(jQuery);
