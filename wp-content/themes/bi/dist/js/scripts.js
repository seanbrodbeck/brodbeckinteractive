(function (window, document, undefined) {
  'use strict';
  
  // Initialize the media query
  var mediaQuery = window.matchMedia('(max-width: 768px)');
  
  // Add a listen event
  mediaQuery.addListener(doSomething);
  
  // Function to do something with the media query
  function doSomething(mediaQuery) {    
    if (mediaQuery.matches) {
    	// Something on mobile
    } else {
      // Something else here on desktop
    }
  }
  
  // On load
  doSomething(mediaQuery);
  
})(window, document);

(function($) {

	var s = skrollr.init();

    $( "#logo" ).click(function(e) {
      e.preventDefault();
      $('#masthead').toggleClass('menu-open');
      $('.menu-bar-middle').toggleClass('hide-menu-bar');
      $('.menu-bar-top').toggleClass('bar-top-active');
      $('.menu-bar-bottom').toggleClass('bar-bottom-active');
      $('.b').toggleClass('active-b');
      $('section').toggleClass('shift')
      $(".logo-type").toggleClass("logo-type-open-nav").insertBefore( ".nav-text" );
      $(".logo-type:not(.logo-type-open-nav)").insertAfter("#progress");
    });

})( jQuery );
