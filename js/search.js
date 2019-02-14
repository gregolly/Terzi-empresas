$(document).ready(function(){
  $('.search-input').hide();
  $('.search').click(function(){
    $(this).css('transform', 'rotate3d(x)').toggleClass('active').next().slideToggle('fast');
    return false;
  });
});