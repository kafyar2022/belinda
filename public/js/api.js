const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};

const getFilteredProductsTemplate = (filter, onSuccess) => {
  fetch(`/products/filter?page=${filter.page}`, {
    headers,
    method: 'post',
    body: JSON.stringify(filter),
  })
    .then((response) => {
      if (response.ok) {
        return response.json()
      }
      throw new Error();
    })
    .then((response) => {
      onSuccess(response.template);
    })
    .catch((err) => {
      console.error(err);;
    });
};

const getSearchResult = (keyword, onSuccess) =>
  fetch(`/search?keyword=${keyword}`)
  .then((response) => {
    if (response.ok) {
      return response.json();
    }
    throw new Error();
  })
  .then((result) => {
    onSuccess(result.template);
  })
  .catch((err) => {
    console.error(err);
  });

export { getFilteredProductsTemplate, getSearchResult };
