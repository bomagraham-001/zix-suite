
    <div class="footer__main">
        <div class="footer__brand">
            <div class="logo-mark logo-mark--light">
                <span class="logo-mark__number"><img src="{{ asset('images/Group 1 (1).png') }}" alt="The Ten Clothings Logo"></span>
                <span class="logo-mark__text">THE TEN<br>CLOTHINGS</span>
            </div>
            <p class="footer__tagline">Known for exceptional tailoring and attention to <br>detail, we create pieces that reflect confidence,<br> sophistication, and timeless style..</p>
            <p class="footer__copy">© {{ date('Y') }} THE TEN CLOTHINGS. All Rights Reserved.</p>
        </div>

        <div class="footer__nav-group">
            <h4>Navigate</h4>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
            </ul>
        </div>

        <div class="footer__nav-group">
            <h4>Social</h4>
            <ul>
                <li><a href="#" target="_blank" rel="noopener">Instagram</a></li>
                <li><a href="#" target="_blank" rel="noopener">Facebook</a></li>
                <li><a href="#" target="_blank" rel="noopener">TikTok</a></li>
                <li><a href="#" target="_blank" rel="noopener">Threads</a></li>
            </ul>
        </div>

        <div class="footer__nav-group">
            <h4>Contact Us</h4>
            <address>
                <p>The Ten Clothings<br>
                Port Harcourt, Rivers State<br>
                Nigeria, 500272</p>
                <p><a href="tel:+2348000000000">+234 800 000 0000</a></p>
                <p><a href="mailto:hello@thetencloths.com">hello@thetencloths.com</a></p>
            </address>
        </div>
    </div>
</footer>
