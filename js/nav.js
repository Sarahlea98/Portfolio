$(document).ready(function() {
    var navbar = $(".navbar");
    var navbarOffset = navbar.offset().top;
  
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
  
      if (scrollTop > navbarOffset) {
        navbar.addClass("navbar-fixed");
      } else {
        navbar.removeClass("navbar-fixed");
      }
    });
  });