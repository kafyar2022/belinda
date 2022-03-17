const header = document.querySelector('.header');
const menu = document.querySelector('.menu');
const menuBtn = header.querySelector('.menu-button');

menuBtn.addEventListener('click', () => {
  header.classList.toggle('menu--shown');
});

document.body.addEventListener('click', (evt) => {
  !menu.contains(evt.target) ? header.classList.remove('menu--shown') : '';
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

const glide = document.querySelector('[data-type="carousel"]');
if (glide) {
  new Glide('[data-type="carousel"]', {
    type: 'carousel',
    perView: 4,
    gap: 32,
    autoplay: 3000,
  }).mount()
}
