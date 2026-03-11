@extends('layouts.app')

@section('title', 'The Ten Clothings | Wear Your Royalty')

@section('description', 'Premium Nigerian menswear. Senators, Kaftans, Agbadas, Suits and Native Wears crafted with precision and elegance.')

@section('content')

<section class="banner">
    <div class="banner-overlay">
        <h1>OUR SIGNATURE PIECES</h1>

        <p>
            A Curated Showcase Of refined tailoring, precise detailing
            <br>and statement designs made for those who lead with <br>confidence
        </p>
    </div>
</section>

<section class="gallery">
    <div class="gallery-container">

        <div class="gallery-item tall">
            <img src="{{ asset('images/pur.png') }}">
        </div>

        <div class="gallery-item short">
            <img src="{{ asset('images/cr.png') }}">
        </div>



        <div class="gallery-item tall">
            <img src="{{ asset('images/g.png') }}">
        </div>

        <div class="gallery-item short
        ">
            <img src="{{ asset('images/mlt.png') }}">
        </div>


        <div class="gallery-item tall">
            <img src="{{ asset('images/2g.png') }}">
        </div>

        <div class="gallery-item tall">
            <img src="{{ asset('images/yel.png') }}">
        </div>


        <div class="gallery-item tall">
            <img src="{{ asset('images/bg.png') }}">
        </div>

        <div class="gallery-item tall">
            <img src="{{ asset('images/bt.png') }}">
        </div>


        <div class="gallery-item tall">
            <img src="{{ asset('images/ash.png') }}">
        </div>

        <div class="gallery-item tall">
            <img src="{{ asset('images/pc.png') }}">
        </div>


        <div class="gallery-item tall">
            <img src="{{ asset('images/qw.png') }}">
        </div>

        <div class="gallery-item tall">
            <img src="{{ asset('images/blc.png') }}">
        </div>


        <div class="gallery-item tall">
            <img src="{{ asset('images/rc.png') }}">
        </div>

        <div class="gallery-item tall">
            <img src="{{ asset('images/hlf.png') }}">
        </div>


        <div class="gallery-item tall">
            <img src="{{ asset('images/blue.png') }}">
        </div>

        <div class="gallery-item tall">
            <img src="{{ asset('images/br.png') }}">
        </div>


        <div class="gallery-item short">
            <img src="{{ asset('images/wg.png') }}">
        </div>

        <div class="gallery-item short">
            <img src="{{ asset('images/red.png') }}">
        </div>


        <!-- Continue same pattern for all images -->

    </div>
</section>

@endsection
