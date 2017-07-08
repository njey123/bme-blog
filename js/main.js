function main() {
  // Fade in content
  $('.container-fluid').hide().fadeIn(1000);

  // Slide titles on homepage onto page
  $('#jumbotron-titles').hide().fadeIn(250).animate({
    'margin-top': '3%'
  }, 500);

  // Scroll to specific section
  $("#about-me-button").click(function() {
    $('html, body').animate({
        scrollTop: $('.homepage-content').offset().top
    }, 750);
});
}

$(document).ready(main);