$(document).ready(function() {
  new WOW().init();

  $(this).scrollTop(0);

  sticky();

  $(window).scroll(function() {
    sticky();
  });

  function sticky() {
    if ($(document).scrollTop() > 90) {
      $(".main-menu").addClass("sticky");
    } else {
      $(".main-menu").removeClass("sticky");
    }
  }

  var $root = $("html, body");

  $('a[href^="#"]').click(function() {
    $root.animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top
      },
      300
    );
    return false;
  });
});
