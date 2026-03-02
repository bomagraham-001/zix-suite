@extends('layouts.app')

@section('title', 'The Ten Clothings | Wear Your Royalty')
@section('description', 'Premium Nigerian menswear. Senators, Kaftans, Agbadas, Suits and Native Wears crafted with precision and elegance.')

@section('content')

    {{-- HERO --}}
<section class="hero">

    <div class="hero-content">


        <h1>WEAR YOUR ROYALTY</h1>

        <p class="hero-text">
            Designed for presence. Tailored for confidence
        </p>

        <a href="{{route('shop_page')}}" class="btn">Shop Now</a>
        <div class="hero__stick"></div>
    </div>

    <div class="hero-image">
        <img src="{{ asset('images/hero.png') }}" alt="Royal Outfit">
    </div>

</section>


     <!-- QUOTE SECTION -->
<section class="quote-section">
    <div class="quote-container">

        <div class="quote-mark">“</div>

        <p class="quote-text">
            Great style doesn’t happen by chance.
            It is thoughtfully cut, shaped, and tailored with intention,
            delivering a perfect fit, lasting quality,
            and the confidence to step out at your best.
        </p>

        <p class="quote-footer">That is our promise.</p>

    </div>
</section>



<!-- ================= COLLECTION SECTION ================= -->

<section class="collection-section">

    <div class="collection-bg-title">
        TOP TEN CLOTHING
    </div>

    <div class="collection-grid">

        <!-- Row 1 -->
        <div class="grid-item senator">
            <img src="{{ asset('images/senator.png') }}" alt="Senator">
            <div class="overlay"><span>SENATOR</span></div>
        </div>

        <div class="grid-item kaftan">
            <img src="{{ asset('images/kaftan.png') }}" alt="Kaftan">
            <div class="overlay"><span>KAFTAN</span></div>
        </div>

        <!-- Row 2 -->
        <div class="grid-item suit">
            <img src="{{ asset('images/suit.png') }}" alt="Suit">
            <div class="overlay"><span>SUIT</span></div>
        </div>

        <div class="grid-item agbada">
            <img src="{{ asset('images/agbada.png') }}" alt="Agbada">
            <div class="overlay"><span>AGBADA</span></div>
        </div>

        <!-- Row 3 -->
        <div class="grid-item native">
            <img src="{{ asset('images/native.png') }}" alt="Native Wears">
            <div class="overlay"><span>NATIVE WEARS</span></div>
        </div>

    </div>

</section>


    {{-- HOW IT WORKS --}}
   <section class="how-section">

    <div class="section-header">
        <span class="line"></span>
        <h4>How It Works</h4>
        <span class="line"></span>
    </div>

    <div class="steps">

        <div class="step">
            <h3>O1</h3>
            <h5>CHOOSE YOUR STYLE</h5>
            <p>Browse our curated designs or request
                a custom piece tailored to your vision.</p>
        </div>

        <div class="step">
            <h3>O2</h3>
            <h5>GET MEASURED</h5>
            <p>Share your measurements or schedule
                a fitting for a proper fit.</p>
        </div>

        <div class="step">
            <h3>O3</h3>
            <h5>PRECISION CRAFTED</h5>
            <p>Our tailors bring your garment to life with
                refined techniques and attention to detail.</p>
        </div>

        <div class="step">
            <h3>O4</h3>
            <h5>DELIVERED TO YOU</h5>
            <p>Expert tailors bring your garment to life with
                refined techniques and attention to detail.</p>
        </div>

    </div>
        <!-- ================= SIGNATURE STYLES ================= -->

    <div class="section-header signature-header">
        <span class="line"></span>
        <h4>Signature Styles</h4>
        <span class="line"></span>
    </div>

    <div class="products">

        <div class="product">
            <img src="{{ asset('images/agbada2 (1).png') }}" alt="">
            <h5>ROYAL AGBADA</h5>
            <p>₦150,000</p>
        </div>

        <div class="product">
            <img src="{{ asset('images/agbada2 (2).png') }}" alt="">
            <h5>EMBROIDERED AGBADA</h5>
            <p>₦180,000</p>
        </div>

        <div class="product">
            <img src="{{ asset('images/agbada2 (3).png') }}" alt="">
            <h5>EXECUTIVE COMMAND SET</h5>
            <p>₦120,000</p>
        </div>

        <div class="product">
            <img src="{{ asset('images/agbada2 (4).png') }}" alt="">
            <h5>STATEMENT GRAND AGBADA</h5>
            <p>₦160,000</p>
        </div>

    </div>

    <div class="view-more">
        <a href="#">View more</a>
    </div>

</section>


<!-- ================= CLIENT EXPERIENCES ================= -->

<section class="testimonials">

    <div class="testimonial-header">
        <span class="line"></span>
        <h4>Client Experiences</h4>
        <span class="line"></span>
    </div>

    <div class="testimonial-content">

        <p class="testimonial-text">
            “I’ve never worn an agbada that fit this perfectly.
            The embroidery was clean and sharp.
            I got compliments all day at my cousin’s wedding.”
        </p>

        <div class="divider"></div>

        <h3 class="client-name">Chinedu A.</h3>
        <p class="client-location">Lagos</p>

        <div class="testimonial-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>

    <div class="big-quote">”</div>

</section>


@endsection
