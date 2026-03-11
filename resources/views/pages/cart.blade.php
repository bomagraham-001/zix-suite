@extends('layouts.app')

@section('title', 'Cart | The Ten Clothings')
@section('description', 'Review your cart items and proceed to checkout.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('CSS/cart.css') }}">
@endpush

@section('content')

<section class="cart-page">

  <!-- Breadcrumb -->
  <div class="cart-breadcrumb">
    <a href="{{ url('/') }}">HOME</a>
    <span>/</span>
    <span class="current">CART</span>
  </div>

  <!-- Top layout -->
  <div class="cart-layout">

    <!-- LEFT: Cart items -->
    <div class="cart-left">
      <h2 class="cart-title">CART (2)</h2>

      <div class="cart-items">

        <!-- Item 1 -->
        <article class="cart-item">
          <a class="cart-item__thumb" href="#">
            <img src="{{ asset('images/white-abada.png') }}" alt="Embroidered Agbada">
          </a>

          <div class="cart-item__info">
            <div class="cart-item__top">
              <div>
                <p class="cart-item__name">Embroidered Agbada</p>
                <p class="cart-item__price">₦50,000</p>
              </div>

              <button class="cart-item__remove" type="button" aria-label="Remove item">×</button>
            </div>

            <div class="cart-item__actions">
              <div class="qty">
                <button type="button" class="qty__btn" aria-label="Decrease quantity">-</button>
                <span class="qty__value">1</span>
                <button type="button" class="qty__btn" aria-label="Increase quantity">+</button>
              </div>
            </div>
          </div>
        </article>

        <!-- Item 2 -->
        <article class="cart-item">
          <a class="cart-item__thumb" href="#">
            <img src="{{ asset('images/native.png') }}" alt="Statement Grand Agbada">
          </a>

          <div class="cart-item__info">
            <div class="cart-item__top">
              <div>
                <p class="cart-item__name">Statement Grand Agbada</p>
                <p class="cart-item__price">₦50,000</p>
              </div>

              <button class="cart-item__remove" type="button" aria-label="Remove item">×</button>
            </div>

            <div class="cart-item__actions">
              <div class="qty">
                <button type="button" class="qty__btn" aria-label="Decrease quantity">-</button>
                <span class="qty__value">1</span>
                <button type="button" class="qty__btn" aria-label="Increase quantity">+</button>
              </div>
            </div>
          </div>
        </article>

      </div>
    </div>

    <!-- RIGHT: Order summary -->
    <aside class="cart-right">
      <div class="summary">
        <h3 class="summary__title">ORDER SUMMARY (2 ITEMS)</h3>

        <div class="summary__rows">
          <div class="summary__row">
            <span>Subtotal</span>
            <span>₦100,000</span>
          </div>

          <div class="summary__row">
            <span>Discount</span>
            <span>₦0.00</span>
          </div>

          <div class="summary__row">
            <span>Delivery</span>
            <span>₦0.00</span>
          </div>

          <div class="summary__row">
            <span>Shipping fee</span>
            <span>₦20,000</span>
          </div>

          <div class="summary__row summary__row--total">
            <span>Total</span>
            <span>₦120,000</span>
          </div>
        </div>

        <a href="#" class="summary__btn">CHECKOUT</a>
      </div>
    </aside>

  </div>

  <!-- You may also like -->
  <section class="recommend">
    <h3 class="recommend__title">YOU MAY ALSO LIKE</h3>

    <div class="recommend-grid">
      <a class="rec-card" href="#">
        <div class="rec-card__img">
          <img src="{{ asset('images/royal abada.png') }}" alt="Royal Agbada">
        </div>
        <p class="rec-card__name">ROYAL AGBADA</p>
        <p class="rec-card__price">₦50,000</p>
      </a>

      <a class="rec-card" href="#">
        <div class="rec-card__img">
          <img src="{{ asset('images/white-abada.png') }}" alt="Statement Grand Agbada">
        </div>
        <p class="rec-card__name">STATEMENT GRAND AGBADA</p>
        <p class="rec-card__price">₦50,000</p>
      </a>

      <a class="rec-card" href="#">
        <div class="rec-card__img">
          <img src="{{ asset('images/abadai.png') }}" alt="Executive Command Set">
        </div>
        <p class="rec-card__name">EXECUTIVE COMMAND SET</p>
        <p class="rec-card__price">₦50,000</p>
      </a>
    </div>
  </section>

</section>

@endsection
