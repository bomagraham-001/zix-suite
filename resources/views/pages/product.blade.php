@extends('layouts.app')

@section('content')

  <div class="product-page">

    <!-- Breadcrumb -->
    <div class="product-breadcrumb">
      <a href="{{route('home')}}">HOME</a>
      <span class="product-sep">/</span>
      <a href="{{route('shop_page')}}">SHOP</a>
      <span class="product-sep">/</span>
      <span class="product-current">EMBROIDERED AGBADA</span>
    </div>

    <!-- Main Product Layout -->
    <section class="product-layout">

      <!-- Left: Images -->
      <div class="product-gallery">
        <div class="product-main-image">
          <img src="{{asset('collections/kaftan.png')}}" alt="Embroidered Agbada">
        </div>

        <div class="product-thumbs">
          <button class="product-thumb product-thumb-active" type="button" aria-label="Thumbnail 1">
            <img src="{{asset('collections/kaftan.png')}}" alt="Thumb 1">
          </button>
          <button class="product-thumb" type="button" aria-label="Thumbnail 2">
            <img src="{{asset('collections/kaftan.png')}}" alt="Thumb 2">
          </button>
          <button class="product-thumb" type="button" aria-label="Thumbnail 3">
            <img src="{{asset('collections/kaftan.png')}}" alt="Thumb 3">
          </button>
          <button class="product-thumb" type="button" aria-label="Thumbnail 4">
            <img src="{{asset('collections/kaftan.png')}}" alt="Thumb 4">
          </button>
        </div>
      </div>

      <!-- Right: Product Info -->
      <div class="product-details">
        <h1 class="product-title">EMBROIDERED AGBADA</h1>
        <div class="product-price">₦180,000</div>

        <div class="product-sizes">
          <label class="product-size">
            <input type="radio" name="size" checked>
            <span>M (40–42)</span>
          </label>

          <label class="product-size">
            <input type="radio" name="size">
            <span>L (42–44)</span>
          </label>

          <label class="product-size">
            <input type="radio" name="size">
            <span>XL (44–46)</span>
          </label>

          <label class="product-size">
            <input type="radio" name="size">
            <span>XXL (46–48)</span>
          </label>

          <label class="product-size">
            <input type="radio" name="size">
            <span>3XL (48–50+)</span>
          </label>
        </div>

        <div class="product-meta">
          <a href="#" class="product-meta-link">SIZE GUIDE</a>
          <span class="product-dot">•</span>
          <span class="product-fabric">FABRIC: CASHMERE</span>
        </div>

        <div class="product-actions">
          <a class="product-btn product-btn-primary" href="/cart/add">ADD TO CART</a>
          <a class="product-btn product-btn-outline" href="/custom-order">CUSTOM ORDER</a>
        </div>

        <div class="product-accordion">
          <button class="product-acc-row" type="button">
            <span>DESCRIPTION</span>
            <span class="product-plus">+</span>
          </button>

          <button class="product-acc-row" type="button">
            <span>REVIEWS (5)</span>
            <span class="product-plus">+</span>
          </button>
        </div>
      </div>

    </section>

  </div> <!-- /product-page -->

  <!-- YOU MAY ALSO LIKE -->
  <section class="product-related-wrap">
    <h2 class="product-related-title">YOU MAY ALSO LIKE</h2>

    <div class="product-related-grid">
      <a href="/product/royal-agbada" class="product-related-card">
        <img src="{{asset('collections/kaftan.png')}}" alt="Royal Agbada">
        <div class="product-related-info">
          <h3>ROYAL AGBADA</h3>
          <p>₦150,000</p>
        </div>
      </a>

      <a href="/product/statement-grand-agbada" class="product-related-card">
        <img src="{{asset('collections/kaftan.png')}}" alt="Statement Grand Agbada">
        <div class="product-related-info">
          <h3>STATEMENT GRAND AGBADA</h3>
          <p>₦160,000</p>
        </div>
      </a>

      <a href="/product/executive-command-set" class="product-related-card">
        <img src="{{asset('collections/kaftan.png')}}" alt="Executive Command Set">
        <div class="product-related-info">
          <h3>EXECUTIVE COMMAND SET</h3>
          <p>₦120,000</p>
        </div>
      </a>
    </div>
  </section>

@endsection
