@extends('layouts.app')

@section('content')

<div class="container">

    <div class="breadcrumb">HOME / ACCOUNT</div>

    <h2 class="title">Account</h2>

    <div class="account-grid">

        <!-- PROFILE -->
        <div class="profile">
            <h3>Philip Chidera</h3>
            <p>philipchidera@gmail.com</p>
        </div>

        <!-- ORDER HISTORY -->
        <div class="orders">
            <h3>Order History</h3>

            <div class="order-card">
                <img src="{{ asset('images/agbada.png') }}">
                <div>
                    <h4>Statement Grand Agbada</h4>
                    <p>₦120,000</p>
                    <small>20/02/2026</small>
                </div>
                <span class="status">In Transit</span>
            </div>

            <div class="order-card">
                <img src="{{ asset('images/agbada2 (4).png') }}">
                <div>
                    <h4>Embroidered Agbada</h4>
                    <p>₦150,000</p>
                    <small>19/03/2026</small>
                </div>
                <span class="status delivered">Delivered</span>
            </div>

        </div>
    </div>

    <!-- YOU MAY LIKE -->
    <h3 class="mt">You may also like</h3>

    <div class="product-grid">

        <div class="product-card">
            <img src="{{ asset('images/agbada2 (2).png') }}">
            <h4>Royal Agbada</h4>
            <p>₦150,000</p>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/agbada2 (4).png') }}">
            <h4>Statement Grand Agbada</h4>
            <p>₦160,000</p>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/agbada2 (3).png') }}">
            <h4>Executive Command Set</h4>
            <p>₦120,000</p>
        </div>

    </div>

</div>

@include("partials.footer")
@endsection
