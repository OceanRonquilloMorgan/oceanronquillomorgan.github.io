// AOS.js - animation on scroll
AOS.init();

/* Implements Bulma modal pop-up using jQuery
 * Requires: toggle the is-active class on the modal div,
             toggle the is-clipped class on the <html> element
 */
function toggleModalClasses(event) {
  var modalId = event.currentTarget.dataset.modalId;
  var modal = $(modalId);
  modal.toggleClass('is-active');
  $('html').toggleClass('is-clipped');
}

$('.open-modal').click(toggleModalClasses);
$('.close-modal').click(toggleModalClasses);

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
