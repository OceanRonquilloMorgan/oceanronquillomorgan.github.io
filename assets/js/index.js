// AOS.js - animation on scroll
AOS.init();

// CounterUp.js - jQuery plugin for number animation
$('.counter').counterUp({
  delay: 10,
  time: 400
});

// ScrollTo.js - smooth scrolling jQuery plugin
$('#scroll').click(function() {
  $([document.documentElement, document.body]).animate(
    {
      scrollTop: $('#about').offset().top
    },
    400
  );
});

// Bulma Carousels
var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances

// TO-DO: Implement modal toggle
