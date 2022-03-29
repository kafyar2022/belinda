import { getFilteredProductsTemplate } from './api.js';

const selects = document.querySelectorAll('select');

selects.forEach(select => {
  new BVSelect({
    selector: `#${select.id}`,
    searchbox: true,
    placeholder: select.dataset.placeholder,
    search_placeholder: 'Поиск...',
  });
});

const filter = {
  classification: '',
  nosology: '',
  prescription: '',
  page: 1,
};

const productsWrapper = document.querySelector('.products-inner');

const productsWrapperClickHandler = (evt) => {
  if (evt.target.className === 'page-link') {
    evt.preventDefault();

    filter.page = evt.target.href.split('page=')[1];
    
    getFilteredProductsTemplate(filter, (template) => {
      productsWrapper.innerHTML = template;
    });
  }
};

productsWrapper.addEventListener('click', productsWrapperClickHandler);

const filterProducts = () => {
  const form = new FormData(document.querySelector('.products-filter'));

  filter.classification = form.get('classification');
  filter.nosology = form.get('nosology');
  filter.prescription = form.get('prescription');
  filter.page = 1;

  getFilteredProductsTemplate(filter, (template) => {
    productsWrapper.innerHTML = template;
  });
};

window.selectChangeHandler = () => {
  filterProducts();
};
