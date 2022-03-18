@extends('layouts.master')

@section('title', 'Новости и образ жизни')

@section('content')
  <main class="newslifestyle-show-page">
    <div class="newslifestyle-show">
      <img class="newslifestyle-show__img" src="{{asset('files/lifestyles/lifestyle.png')}}" alt="LOREN IPSUM SAMPLE TEXT">
      <div class="newslifestyle-show__inner">
        <h1 class="newslifestyle-show__title">Lorem ipsum dolor sit amet consectetur</h1>
        <time class="newslifestyle-show__datetime" datetime="2020-12-23">2020.12.23</time>
        <p class="newslifestyle-show__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a...</p>
      </div>
    </div>

    <div class="glide" data-type="carousel-half">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @foreach (range(1, 4) as $key)
            <li class="glide__slide">
              <x-newslifestyle />
            </li>
          @endforeach
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
      </div>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/newslifestyle.js')}}" type="module"></script>
@endsection
