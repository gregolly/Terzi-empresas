$(document).ready(function(){
  var imgArr = new Array(
    'img/slide1.jpg',
    'img/slide2.jpg',
    'img/slide3.jpg',
    'img/slide4.jpg'
  )

  var preloadArr = new Array();
  var i;

  for(i=0; i < imgArr.length; i++){
    preloadArr[i] = new Image();
    preloadArr[i].src = imgArr[i];
  }

  var currImg = 1;
  var intID = setInterval(changeImg, 6000);

  function changeImg(){
    $('#slide').animate({opacity: 0.9}, 1000, function(){
    $(this).css('background-image','url(' + preloadArr[currImg++%preloadArr.length].src +') top center no-repeat');
    }).animate({opacity: 1}, 1000);
   }
});