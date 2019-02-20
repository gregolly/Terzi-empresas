$(document).ready(function(){
  $(".button-interno a").click(function(){
      $(".overlay-interno").fadeToggle(200);
     $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
});
$('.overlay-interno').on('click', function(){
  $(".overlay-interno").fadeToggle(200);   
  $(".button-interno a").toggleClass('btn-open').toggleClass('btn-close');
  open = false;
});