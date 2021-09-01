
(function($){
  $(function(){
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('select').formSelect();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true,
    });
    $('.tabs').tabs();

  }); // end of document ready
})(jQuery); // end of jQuery name space
