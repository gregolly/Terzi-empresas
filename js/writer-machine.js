function typeWriter(element) {
  const textArray = element.innerHTML.split('');
  element.innerHTML = '';
  textArray.foreach((letra, i) => {
    setTimeout(() => element.innerHTML += letra, 75 * i);
  });  
}

const text_logo = document.querySelector('.text-p');
typeWriter(text_logo);

