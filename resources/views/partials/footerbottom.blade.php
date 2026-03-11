<footer class="footerbottom">
    <div class="footer-container">

        {{-- Left Column --}}
        <div class="footer-col">
            <div class="footer-brand">
                <img src="{{ asset('images/footer (2).jpeg') }}" alt="Top Ten Clothing Logo">
            </div>

            <p class="footer-description">
                Known For Exceptional Tailoring And Attention To Detail,
                We Create Pieces That Reflect Confidence, Sophistication,
                And Timeless Style.
            </p>

            <div class="footer-socials">
                <a href="#">INSTAGRAM</a>
                <a href="#">FACEBOOK</a>
                <a href="#">TIKTOK</a>
                <a href="#">THREAD</a>
            </div>
        </div>

        {{-- Middle Column --}}
        <div class="footer-col">
            <h4><a href="{{ route('home') }}">HOME</a></h4>
            <h4><a href="{{ route('shop_page') }}">SHOP</a></h4>
            <h4><a href="{{ route('gallery') }}">GALLERY</a></h4>
            <h4><a href="{{ route('about') }}">ABOUT</a></h4>
        </div>

        {{-- Right Column --}}
        <div class="footer-col">
            <h4>CONTACT US</h4>
            <p>09096052818</p>
            <p>No 4 King Perekule Street GRA Phase 2, Port Harcourt 500272</p>
            <p>No 4 King Perekule Street GRA Phase 2, Port Harcourt 500272</p>
        </div>

    </div>

    {{-- Bottom Bar --}}
    <div class="footer-bottom">
        <p>© 2025 TOP TEN CLOTHINGS. All Rights Reserved.</p>
        <div>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
        </div>
    </div>
</footer>
