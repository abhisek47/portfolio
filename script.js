$(document).ready(function () {
  $('.button a').click(function () {
    $('.overlay').animate({
      height: 'toggle',
    });
    $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
});
$('.overlay').on('click', function () {
  $('.overlay').animate({
    height: 'toggle',
  });
  $('.button a').toggleClass('btn-open').toggleClass('btn-close');
  open = false;
});

$(document).ready(function () {
  $(window).load(function () {
    $('#loading').fadeIn(500).delay(1500).fadeOut(500);
  });
});
