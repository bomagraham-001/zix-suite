<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Order Enquiry</title>

  {{-- Google Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  {{-- Your CSS --}}
  <link rel="stylesheet" href="{{ asset('CSS/enquiry.css') }}">
</head>
<body>

 <!-- ================= HERO BANNER ================= -->
<section class="about-banner">
    <div class="banner-overlay">
        <div class="banner-content">
            <h1 class="hero-title">Make an Enquiry</h1>
            <p class="hero-subtitle">
                Tell us what you're looking for, and our team will<br>
                guide you through the next steps.
            </p>
        </div>
    </div>
</section>

  <!-- ================= Enquiry Section ================= -->
  <main class="enquiry-page">
    <section class="enquiry-wrap">

      <p class="enquiry-intro">
        We are here to help you create the perfect piece. Share your preferences, and our team will respond with guidance on fabric, fit,
        pricing, and delivery timelines.
      </p>

      <form class="enquiry-form" action="{{ route('enquiry.submit') }}" method="POST">
        @csrf

        <div class="grid-2">
          <div class="field">
            <label for="fullname">Full name</label>
            <input id="fullname" name="fullname" type="text" placeholder="Enter name" value="{{ old('fullname') }}" required />
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Enter email" value="{{ old('email') }}" required />
          </div>

          <div class="field">
            <label for="phone">Phone number (Whatsapp)</label>
            <input id="phone" name="phone" type="tel" placeholder="Enter number" value="{{ old('phone') }}" required />
          </div>

          <div class="field">
            <label for="location">Location</label>
            <input id="location" name="location" type="text" placeholder="Enter location" value="{{ old('location') }}" required />
          </div>
        </div>

        <div class="field field-full">
          <label for="garment">Type of garment</label>
          <div class="select-wrap">
            <select id="garment" name="garment" required>
              <option value="" disabled {{ old('garment') ? '' : 'selected' }}>Select option</option>
              <option value="Senator" {{ old('garment') === 'Senator' ? 'selected' : '' }}>Senator</option>
              <option value="Kaftan" {{ old('garment') === 'Kaftan' ? 'selected' : '' }}>Kaftan</option>
              <option value="Agbada" {{ old('garment') === 'Agbada' ? 'selected' : '' }}>Agbada</option>
              <option value="Suit" {{ old('garment') === 'Suit' ? 'selected' : '' }}>Suit</option>
              <option value="Casual" {{ old('garment') === 'Casual' ? 'selected' : '' }}>Casual</option>
            </select>
          </div>
        </div>

        <div class="field field-full">
          <label for="details">
            Tell us about your design idea <span class="optional">(Optional)</span>
          </label>
          <textarea id="details" name="details" placeholder="Enter details">{{ old('details') }}</textarea>
        </div>

        <button class="submit-btn" type="submit">SUBMIT ENQUIRY</button>
      </form>

    </section>
  </main>

  <!-- ================= Footer ================= -->
  <footer class="site-footer">

    <div class="footer-inner">

      <div class="footer-top">

        <!-- Left -->
        <div class="footer-brand">
          <div class="brand-row">
            <img src="{{ asset('images/footer-logo.jpeg') }}" alt="Top Ten Clothing" class="brand-logo">
            <div class="brand-name">
            </div>
          </div>

          <p class="brand-desc">
            Known For Exceptional Tailoring And Attention To Detail, We Create
            Pieces That Reflect Confidence, Sophistication, And Timeless Style.
          </p>
        </div>

        <!-- Middle -->
        <div class="footer-links">
          <a href="#">HOME</a>
          <a href="#">SHOP</a>
          <a href="#">GALLERY</a>
          <a href="#">ABOUT</a>
        </div>

        <!-- Right -->
        <div class="footer-contact">
          <h4>CONTACT US</h4>
          <p>09096052818</p>
          <p>No 4 King Perekule Street GRA Phase 2, Port Harcourt 500272</p>
          <p>No 4 King Perekule Street GRA Phase 2, Port Harcourt 500272</p>
        </div>

      </div>

      <!-- Social -->
      <div class="footer-social">
        <a href="#">INSTAGRAM</a>
        <a href="#">FACEBOOK</a>
        <a href="#">TIK TOK</a>
        <a href="#">THREAD</a>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
      <div class="footer-bottom-inner">
        <p>2025 TOP TEN CLOTHINGS. ALL RIGHTS RESERVED.</p>
        <div class="footer-legal">
          <a href="#">PRIVACY POLICY</a>
          <a href="#">TERMS AND CONDITION</a>
        </div>
      </div>
    </div>

  </footer>

</body>
</html>
