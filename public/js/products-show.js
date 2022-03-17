import './accordion.js';

const halfGlide = document.querySelector('[data-type="carousel-half"]');
if (halfGlide) {
  new Glide('[data-type="carousel-half"]', {
    type: 'carousel',
    perView: 2,
    gap: 32,
    autoplay: 3000,
  }).mount()
}

