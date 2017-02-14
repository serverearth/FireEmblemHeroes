/* Enables smooth transition to anchors when using navigation bar.
 * Code adapted from http://www.w3schools.com/jquery/tryit.asp?filename=
 * tryjquery_eff_animate_smoothscroll 
 */
$(document).ready(function() {
  // Run the following when a link is clicked
  $("a").on('click', function(event) {
    if (this.hash !== '') {
      // Disables the default immediage transition to anchor
      event.preventDefault();
      var hash_code = this.hash;
      // Scrolls to anchor in 800 milliseconds
      $('html, body').animate( {
        scrollTop: $(hash_code).offset().top
      }, 800, function() {
        window.location.hash = hash_code;
      });
    }
  });
});

$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
        $('#caret_container').fadeIn(200);    // Fade in the arrow
    } else {
        $('#caret_container').fadeOut(200);   // Else fade out the arrow
    }
});