<header class="navbar" id="navbar">

    <div class="top-header">
        <div class="top-left">
            <select>
                <option>English</option>
                <option>French</option>
            </select>

            <select>
                <option>NGN</option>
                <option>USD</option>
            </select>
        </div>

        <div class="top-right">
            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="search">
            </div>
        </div>
    </div>


    <nav class="navbar__inner">
        <ul class="navbar__links navbar__links--left">
            <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('shop.index') }}" class="nav-link {{ request()->routeIs('shop.index') ? 'active' : '' }}">Shop</a></li>
            <li><a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
            <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
        </ul>

        <a href="{{ route('home') }}" class="navbar__logo">
            <div class="logo-mark">
                <span class="logo-mark__number"><img src="{{ asset('images/Group 1.png') }}" alt="The Ten Clothings Logo"></span>
                <span class="logo-mark__text">TOP TEN<br>CLOTHINGS</span>
            </div>
        </a>

        <ul class="navbar__links navbar__links--right">
            <li><a href="{{ route('enquiry.index') }}" class="nav-link">Enquiries</a></li>
            <li><a href="{{ route('laundry') }}" class="nav-link">Laundrry</a></li>
            <li><a href="{{ route('Account') }}" class="nav-link {{ request()->routeIs('Account') ? 'active' : '' }}">Account</a></li>
            <li><a href="{{ route('cart.index') }}" class="nav-link">Cart</a></li>
        </ul>

        <button class="navbar__hamburger" aria-label="Menu" id="menuToggle">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('shop.index') }}">Shop</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('enquiry.index') }}">Enquiries</a></li>
        </ul>
    </div>
</header>
