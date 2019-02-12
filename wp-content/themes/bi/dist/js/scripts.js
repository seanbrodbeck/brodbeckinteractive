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

	

})( jQuery );
