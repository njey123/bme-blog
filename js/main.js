function main() {
  // Fade in content
  $('body').hide().fadeIn(250);

  // Slide titles on homepage onto page
  $('#jumbotron-titles').hide().fadeIn(250).animate({
    'margin-top': '3%'
  }, 500);

  // Scroll to About Me section on homepage if user is on homepage
  if(window.location.pathname.length === '0' || window.location.pathname === '/' || window.location.pathname === '/index.php') {
    $("#about-me-button").click(function() {
      $('html, body').animate({
          scrollTop: $('.about-me-section').offset().top
      }, 750);  
    });
  }
}

$(document).ready(main);