$(document).ready(function() {
  ////////////////////////////////////
  //
  //Slide out menu - Close with X icon
  //
  ////////////////////////////////////
  var menuToggle = $('.menu-toggle'),
      slideMenu = $('.slide-out-menu'),
      menuClose = $('.menu-close'),
      overlay = $('.popup-overlay');


  menuToggle.on('click', function() {
    slideMenu.toggleClass('slide-out-menu--active');
    overlay.addClass('popup-overlay--active');
  });

  menuClose.on('click', function() {
    slideMenu.toggleClass('slide-out-menu--active');
    overlay.toggleClass('popup-overlay--active');
  });


  ////////////////////////////////////
  //
  //Slide out Login - Close with X icon
  //
  ////////////////////////////////////

  var loginToggle = $('.login-toggle'),
      showLogin = $('.slide-down-login'),
      loginClose = $('.login-close'),
      navLoginToggle = $('#nav-login-btn'),
      navContactToggle = $('#nav-contact-btn'),
      contactForm = $('.contact-form'),
      contactToggle = $('.contact-toggle'),
      contactClose = $('.contact-form__close');

  loginToggle.on('click', function() {
    showLogin.toggleClass('slide-down-login--active');
    overlay.addClass('popup-overlay--active');
  });

  loginClose.on('click', function() {
    showLogin.toggleClass('slide-down-login--active');
    overlay.removeClass('popup-overlay--active');
  });
    

  navLoginToggle.on('click', function() {
    slideMenu.toggleClass('slide-out-menu--active');
    overlay.toggleClass('popup-overlay--active');
    showLogin.toggleClass('slide-down-login--active');
    overlay.addClass('popup-overlay--active');
  });

  navContactToggle.on('click', function() {
    slideMenu.toggleClass('slide-out-menu--active');
    overlay.toggleClass('popup-overlay--active');
    contactForm.toggleClass('contact-form--active');
    overlay.addClass('popup-overlay--active');
  })

  contactToggle.on('click', function () {
    contactForm.toggleClass('contact-form--active');
    overlay.addClass('popup-overlay--active');
  });

  contactClose.on('click', function() {
    contactForm.toggleClass('contact-form--active');
    overlay.removeClass('popup-overlay--active');
  });

  overlay.on('click', function () {
    $(this).removeClass('popup-overlay--active');
    slideMenu.removeClass('slide-out-menu--active');
    showLogin.removeClass('slide-down-login--active');
    contactForm.removeClass('contact-form--active');
  });


  ////////////////////////////////////
  //
  //Accordion on slide out navigation
  //
  ////////////////////////////////////
  $('.sub-nav:not(:first)').hide();

  $('.nav-item > a').click(function() {

      $('.sub-nav').slideUp('normal');
      $(this).next('.sub-nav').slideDown('normal');

    });

  ////////////////////////////////////
  //
  //Sidebar Accordion
  //
  ////////////////////////////////////

  var panels = $('.accordion').hide();

  panels.first().show();

  $('.accordion-header').click(function() {

      $('.accordion').slideUp('normal');
      $(this).next('.accordion').slideDown('normal').addClass('accordion--active');

  });



  ////////////////////////////////////
  //
  //Featured Tabs
  //
  ////////////////////////////////////
  $('.featured__tab').click(function() {

    var tab_id = $(this).attr('data-tab');

    $('.featured__tab').removeClass('featured__tab--active');
    $('.featured__content--active').removeClass('featured__content--active');

    $(this).addClass('featured__tab--active');
    $("#"+tab_id).addClass('featured__content--active');

  });


  ////////////////////////////////////
  //
  //Search Box Toggle
  //
  ////////////////////////////////////

  $('#search-button').click(function() {

    var searchBox = $('.slide-down-search');

    $('#search-button').toggleClass('fa-times');

    searchBox.fadeToggle(200);

  });



  ////////////////////////////////////
  //
  //Additional Site Download Toggle
  //
  ////////////////////////////////////

  var siteDownloads = $('.site-downloads__btn'),
      toggleList = $('.site-downloads__toggles'),
      siteDownloadsClose = $('.site-downloads__btn span.fa-caret-down');

  siteDownloads.click(function () {
    toggleList.slideToggle(200);
    siteDownloadsClose.toggleClass('fa-times fa-caret-down');

  });



  ////////////////////////////////////
  //
  //Lightbox Controls
  //
  ////////////////////////////////////

  $(function () {
    $('a.lb_img').fluidbox();
  });



  ////////////////////////////////////
  //
  //Sticky Kit
  //
  ////////////////////////////////////

  $(".make-sticky").stick_in_parent({
      offset_top:20,
      parent: ".sticky-parent", // note: we must now manually provide the parent
      //spacer: ".sticky-spacer",
    });
  //$(document.body).trigger("sticky_kit:recalc");

});
