var slideshow = new slideshow({
  backgroundElementId:"slide",
  trickInterval: 5000,
  transitionTime: 800
});

slideshow.setImages(['slide.jpg','slide2.jpg', 'slide3.jpg', 'slide4.jpg']);

slideshow.run();