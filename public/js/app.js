/**
 * The Ten Clothings — Main JavaScript
 */

// =============================================
// NAVBAR: Scroll effect + hamburger
// =============================================
(function initNavbar() {
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!navbar) return;

    // Scroll effect
    function handleScroll() {
        if (window.scrollY > 80) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // Mobile menu toggle
    let menuOpen = false;
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            menuOpen = !menuOpen;
            mobileMenu.style.display = menuOpen ? 'block' : 'none';
            mobileMenu.style.transform = menuOpen ? 'translateX(0)' : 'translateX(100%)';
            document.body.style.overflow = menuOpen ? 'hidden' : '';

            // Animate hamburger
            const spans = menuToggle.querySelectorAll('span');
            if (menuOpen) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
            }
        });

        // Close on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuOpen = false;
                mobileMenu.style.display = 'none';
                document.body.style.overflow = '';
                menuToggle.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
            });
        });
    }
})();

// =============================================
// TESTIMONIALS SLIDER
// =============================================
(function initTestimonials() {
    const slider = document.getElementById('testimonialSlider');
    if (!slider) return;

    const testimonials = slider.querySelectorAll('.testimonial');
    const dots = document.querySelectorAll('.dot');
    let current = 0;
    let interval;

    function goTo(index) {
        testimonials[current].classList.remove('testimonial--active');
        dots[current]?.classList.remove('dot--active');
        current = index;
        testimonials[current].classList.add('testimonial--active');
        dots[current]?.classList.add('dot--active');
    }

    function next() {
        goTo((current + 1) % testimonials.length);
    }

    // Auto-advance
    interval = setInterval(next, 5000);

    // Dot clicks
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            clearInterval(interval);
            goTo(i);
            interval = setInterval(next, 5000);
        });
    });
})();

// =============================================
// SCROLL REVEAL (Intersection Observer)
// =============================================
(function initScrollReveal() {
    if (!('IntersectionObserver' in window)) return;

    const elements = document.querySelectorAll(
        '.collection-card, .process-step, .signature-card, .value-card, .gallery-item, .product-card'
    );

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, i * 60);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(24px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
})();

// =============================================
// SHOP: Sort & Price Range
// =============================================
(function initShop() {
    const sortSelect = document.getElementById('sortSelect');
    if (sortSelect) {
        sortSelect.addEventListener('change', () => {
            const url = new URL(window.location);
            url.searchParams.set('sort', sortSelect.value);
            window.location = url.toString();
        });
    }

    const priceRange = document.getElementById('priceRange');
    const priceLabel = document.getElementById('priceLabel');
    if (priceRange && priceLabel) {
        priceRange.addEventListener('input', () => {
            const val = parseInt(priceRange.value);
            priceLabel.textContent = '₦' + val.toLocaleString();
        });
    }
})();

// =============================================
// ENQUIRY FORM: Client-side UX
// =============================================
(function initEnquiryForm() {
    const form = document.getElementById('enquiryForm');
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', () => {
        if (submitBtn) {
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
        }
    });
})();

// =============================================
// LAZY LOAD images
// =============================================
(function initLazyLoad() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    if ('loading' in HTMLImageElement.prototype) return; // native support

    if (!('IntersectionObserver' in window)) return;

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
})();

// =============================================
// SMOOTH ANCHOR SCROLL
// =============================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

console.log('%c THE TEN CLOTHINGS ', 'background:#c9a84c;color:#0a0a08;font-weight:bold;font-size:14px;padding:8px 16px;');
console.log('%c Wear Your Royalty ', 'color:#c9a84c;font-style:italic;');
