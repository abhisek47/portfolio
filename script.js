$(document).ready(function () {
  $('.button a').click(function () {
    $('.overlay').slideToggle(500);
    $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
});
$('.overlay').on('click', function () {
  $('.overlay').slideToggle(500);
  $('.button a').toggleClass('btn-open').toggleClass('btn-close');
  open = false;
});
