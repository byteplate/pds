$(document).ready(function() {

  // Sub menu pop up on the main page navigation.
  $('.has-sub-nav > a').on('click', function(event) {
    event.stopPropagation();
    $('.sub-nav').removeClass('sub-nav--active');
    $(this).parent().find('.sub-nav').toggleClass('sub-nav--active');
  });

  // Clicking anywhere in the document to hide the
  // sub menu popup.
  $('html').click(function() {
    $('ul.sub-nav').removeClass('sub-nav--active');
    $('.sr__flyover').removeClass('sr__flyover--active');
    $('.pt__flyover').removeClass('pt__flyover--active');
  });


  // Toggle classes to hide/show the flyover on the homepage
  // hero as well as the different product types.
  $('.hero').on('mouseenter', function(event) {
    event.stopPropagation();
    $('.sr__flyover').removeClass('sr__flyover--active');
    $('ul.sub-nav').removeClass('sub-nav--active');
    $(this).find('.sr__flyover').toggleClass('sr__flyover--active');
  });

  $('.product-types > .product-type').on('click', function(event) {
    event.stopPropagation();
    $('.pt__flyover').removeClass('pt__flyover--active');
    $('ul.sub-nav').removeClass('sub-nav--active');
    $(this).find('.pt__flyover').toggleClass('pt__flyover--active');
  });


  /* Jump to Spindle section in the product gallery. */

  $('#p-gallery').change( function () {
    var targetPosition = $($(this).val()).offset().top;
    $('html,body').animate({ scrollTop: targetPosition}, 'slow');
  });


  /*
  Mobile Navigation Slide-out
  */

  $('.mobile-nav__burger').on('click', function () {
    $('.overlay').fadeToggle('overlay--active');
    $('.mobile-nav').toggleClass('mobile-nav--active');
  });

  $('.mobile-nav__close-btn i').on('click', function () {
    $('.overlay').fadeToggle('overlay--active');
    $('.mobile-nav').toggleClass('mobile-nav--active');
  });

  // Click on overlay to hide any menus or popups
  $('.overlay').on('click', function () {
    $('.overlay').fadeToggle('overlay--active');
    $('.mobile-nav').toggleClass('mobile-nav--active');
  });


  /*
  Fixed sidebar on scroll

  Sticks to the top of the page and then removes
  the fixed class when it hits the footer.

  Uses Sticky Kit plugin from http://leafo.net/sticky-kit/
  */

  $('.sidebar').stick_in_parent();

});

