(function($) {
  $( document ).ready(function() {
    $(".nextProject a").hover(
      function() {
        $(".nextProject").css("background-color","#584477")
      }, function() {
        $(".nextProject").css("background-color","#352954")
      }
    )
  })
})(jQuery);
