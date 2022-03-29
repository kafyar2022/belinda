const getFilteredProductsTemplate = (filter, onSuccess) => {
  fetch(`/products/filter?page=${filter.page}`, {
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      },
      method: 'post',
      body: JSON.stringify(filter),
    })
    .then((response) => response.json())
    .then((response) => {
      onSuccess(response.template);
    });
};

export { getFilteredProductsTemplate };
