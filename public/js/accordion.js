const accordion = document.querySelector('[data-type="accordion"]');
const buttons = accordion.querySelectorAll('dt');

const buttonClickHandler = (evt) => {
  buttons.forEach(element => {
    if (element.contains(evt.target)) {
      if (element.classList.contains('accordion__head--hidden')) {
        element.classList.remove('accordion__head--hidden');
        element.nextElementSibling.style.height = element.nextElementSibling.scrollHeight + 'px';
      } else {
        element.classList.add('accordion__head--hidden');
        element.nextElementSibling.style.height = 0;
      }
      return;
    }
    element.classList.add('accordion__head--hidden');
  });
};

const accordionClickHandler = (evt) => {
  if (!accordion.contains(evt.target)) {
    buttons.forEach(button => {
      button.classList.add('accordion__head--hidden');
      button.nextElementSibling.style.height = 0;
    });
  }
};

buttons.forEach(button => {
  button.addEventListener('click', buttonClickHandler)
});

document.body.addEventListener('click', accordionClickHandler);
