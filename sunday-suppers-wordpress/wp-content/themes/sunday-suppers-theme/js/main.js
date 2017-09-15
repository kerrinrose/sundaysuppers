$('.nav-icon').click(function() {

  $('.mobile-overlay').css('height', '100%');
});

$('.closebtn').click( function () {

$('.mobile-overlay').css('height', '0%');

});

$('.after').click(function() {

  $(this).toggleClass('afterafter');
  $(this).next().toggleClass('display-block');

});
