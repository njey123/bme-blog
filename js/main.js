function main() {
  // Fade in content
  $('.container-fluid').hide().fadeIn(1000);

  // Slide titles on homepage onto page
  $('#homepage-titles').hide().fadeIn(200).animate({
    'margin-top': '3%'
  }, 400);

  // Hovering over nav bar
  $( "nav p" ).hover(function() {
    $(this).toggleClass('nav-p-active');
  });
}

$(document).ready(main);