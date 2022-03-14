const header = document.querySelector('.header');
const menu = document.querySelector('.menu');
const menuBtn = header.querySelector('.menu-button');

menuBtn.addEventListener('click', () => {
  header.classList.toggle('menu--shown');
});

document.body.addEventListener('click', (evt) => {
  !menu.contains(evt.target) ? header.classList.remove('menu--shown') : '';
  console.log('sdfsd');
});

const searchInput = header.querySelector('input[type="search"]');

searchInput.setAttribute('size', searchInput.getAttribute('placeholder').length);

searchInput.addEventListener('input', () => {
  searchInput.value.length > 0 ? searchInput.setAttribute('size', searchInput.value.length) : searchInput.setAttribute('size', searchInput.getAttribute('placeholder').length);
});

searchInput.addEventListener('focusout', () => {
  searchInput.setAttribute('size', searchInput.getAttribute('placeholder').length);
  searchInput.value = '';
});
