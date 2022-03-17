@props(['product'])

<figure class="product-card">
  <figcaption class="product-card__title">Dorsob-T</figcaption>
  <div class="product-card__img-wrapper">
    <img class="product-card__img" src="{{ asset('files/products/thumbs/product.png') }}" alt="Dorsob-T">
  </div>
  <p class="product-card__category">Eye Drops</p>
  <p class="product-card__prescription">OTC</p>
  <a class="product-card__link" href="{{ route('products.show', $product) }}">Подробнее</a>
</figure>
