@extends('layouts.app')

@section('content')

 <section class="herobanner">

    <!-- Overlay -->
    <div class="laundry-overlay"></div>

    <!-- Hero Content -->
    <div class="herocontent">
        <h1>THE CARE STANDARD</h1>
        <p>
            Reliable laundry service with proper cleaning,<br>
            pressing, and timely delivery.
        </p>
    </div>

</section>

<!-- SERVICE INTRO -->
<section class="service-intro">
    <div class="container">
        <div class="service-grid">
            <div class="image">
                <img src="{{ asset('images/laundry.png') }}" alt="Laundry Service">
            </div>

            <div class="content">
                <h2>Professional Garment Care</h2>
                <p>
                    We provide reliable washing, careful handling, and crisp finishing to keep your garments clean,
                    fresh, and ready to wear. From everyday pieces to occasion outfits,
                    every item is treated with attention and delivered on time.
                </p>

                <a href="#" class="btn-outline">Book Service</a>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="how-section">

    <div class="section-header">
        <span class="line"></span>
        <h4>OUR SERVICES</h4>
        <span class="line"></span>
    </div>

    <div class="steps">

        <div class="step">
            <h3>O1</h3>
            <h5>WASHING AND DRYING</h5>
            <p>Thorough cleaning using fabric-appropriate methods to maintain quality and freshness.</p>
        </div>

        <div class="step">
            <h3>O2</h3>
            <h5>IRONING AND PRESSING</h5>
            <p>Crisp, structured finishing to restore sharpness and presentation.</p>
        </div>

        <div class="step">
            <h3>O3</h3>
            <h5>GARMENT CARE</h5>
            <p>Special handling for delicate or structured pieces requiring extra attention.</p>
        </div>

        <div class="step">
            <h3>O4</h3>
            <h5>PICK UP & DELIVERY</h5>
            <p>Convenient door-to-door service for a seamless experience..</p>
        </div>

    </div>
</section>

<section class="service-hero">
    <div class="herooverlay"></div>

    <div class="hero_content">
        <h1>
            BOOK LAUNDRY SERVICE <br>
            NOW
        </h1>

        <p>Simple. Reliable. Delivered with care.</p>

        <a href="#" class="btn-book">Book Service</a>
    </div>
</section>


@endsection
