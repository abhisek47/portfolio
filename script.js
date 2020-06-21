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
  $('body').oad(function () {
    $('#loading').show().delay(1500).fadeOut(500);
  });
});

window.addEventListener('load', () => {
  const preload = document.getElementById('loading');
  preload.classList.add('loading-finish');
});
