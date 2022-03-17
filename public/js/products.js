
const selects = document.querySelectorAll('select');

selects.forEach(select => {
  new BVSelect({
    selector: `#${select.id}`,
    searchbox: true,
    placeholder: select.dataset.placeholder,
    search_placeholder: 'Поиск...',
  });
});


