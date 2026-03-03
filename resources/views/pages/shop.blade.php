
    @extends('layouts.app')

@section('title', 'The Ten Clothings | Wear Your Royalty')
@section('description', 'Premium Nigerian menswear. Senators, Kaftans, Agbadas, Suits and Native Wears crafted with precision and elegance.')

@section('content')

<section class="shop-about-banner">
    <div class="shop-banner-overlay">
        <h1>THE COLLECTION</h1>

        <p>
            A curated selection of tailored pieces designed for
            <br>presence and precision.
        </p>
    </div>
</section>

<!-- ================= HEADER ================= -->
<header class="shop-top-bar">
    <nav class="shop-category-nav">
        <a href="#" class="shop-active">All Collection</a>
        <a href="#">Senator</a>
        <a href="#">Kaftan</a>
        <a href="#">Agbada</a>
        <a href="#">Suits</a>
        <a href="#">Casual</a>
        <a href="#">Platforms</a>
    </nav>

    <div class="shop-actions">
        <a href="#" class="shop-action-link">
            <span>Filter</span>
            <i class="fa-solid fa-sliders"></i>
        </a>

        <a href="#" class="shop-action-link">
            <span>Sort</span>
            <i class="fa-solid fa-arrow-down-wide-short"></i>
        </a>
    </div>
</header>

<!-- ================= PRODUCT GRID ================= -->
<section class="shop-product-section">
    <div class="shop-product-grid">

        <!-- Product Card -->
        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>ROYAL AGBADA</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EMBROIDERED AGBADA</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>EXECUTIVE COMMAND SET</h3>
                <p><b>₦150,000</b></p>
            </div>
        </a>

        <a href="{{route('product_page')}}" class="shop-product-card">
            <div class="shop-product-image">
                <img src="{{asset('collections/agbada.png')}}" alt="Royal Agbada">
            </div>
            <div class="shop-product-info">
                <h3>STATEMENT GRAND AGBADA</h3>
                <p>₦160,000</p>
            </div>
        </a>

    </div>
</section>

<!-- ================= PAGINATION ================= -->
<div class="shop-pagination">
    <a href="#" class="shop-prev">Prev</a>
    <a href="#" class="shop-page shop-active">1</a>
    <a href="#" class="shop-page">2</a>
    <a href="#" class="shop-page">3</a>
    <a href="#" class="shop-page">4</a>
    <a href="#" class="shop-page">5</a>
    <a href="#" class="shop-page">6</a>
    <a href="#" class="shop-next">Next</a>
</div>


@endsection
