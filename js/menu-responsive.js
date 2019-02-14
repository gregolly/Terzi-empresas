$(document).ready(function(){
  $(".button a").click(function(){
      $(".overlay-menu").fadeToggle(200);
     $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
});
$('.overlay-menu').on('click', function(){
  $(".overlay-menu").fadeToggle(200);   
  $(".button a").toggleClass('btn-open').toggleClass('btn-close');
  open = false;
});