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
