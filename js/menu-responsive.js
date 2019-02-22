$(document).ready(function(){
  $(".button-menu a").click(function(){
      $(".overlay-menu").fadeToggle(200);
     $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
});
$('.overlay-menu').on('click', function(){
  $(".overlay-menu").fadeToggle(200);   
  $(".button-menu a").toggleClass('btn-open').toggleClass('btn-close');
  open = false;
});