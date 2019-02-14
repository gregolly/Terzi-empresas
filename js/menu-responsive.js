$(document).ready(function () {
  $("#menu a").click(function () {
      $(".overlay-menu").fadeToggle(200);
      $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
  $('#menu a').on('click', function () {
      $(".overlay-menu").fadeToggle(200);
      $("#menu a").toggleClass('btn-open').toggleClass('btn-close');
  });
});