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
      We’re here to help you create the perfect piece. Share your preferences, and our team will respond with guidance on fabric, fit,
      pricing, and delivery timelines.
    </p>

    <p class="enquiry-whatsapp">
      Prefer to Speak With Us Directly? <a href="#" class="enquiry-whatsapp__link">Chat on Whatsapp</a>
    </p>

    <form class="enquiry-form" action="{{ route('enquiry.submit') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Row 1 -->
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

      <!-- Material -->
      <div class="field field-full">
        <label for="material">Material <span class="optional">(Optional)</span></label>
        <div class="select-wrap">
          <select id="material" name="material">
            <option value="" {{ old('material') ? '' : 'selected' }}>Select option</option>
            <option value="Wool" {{ old('material') === 'Wool' ? 'selected' : '' }}>Wool</option>
            <option value="Cotton" {{ old('material') === 'Cotton' ? 'selected' : '' }}>Cotton</option>
            <option value="Linen" {{ old('material') === 'Linen' ? 'selected' : '' }}>Linen</option>
            <option value="Silk" {{ old('material') === 'Silk' ? 'selected' : '' }}>Silk</option>
            <option value="Other" {{ old('material') === 'Other' ? 'selected' : '' }}>Other</option>
          </select>
        </div>
        <p class="field-hint">Not sure? Our team will guide you</p>
      </div>

      <!-- Garment -->
      <div class="field field-full">
        <label for="garment">Type of garment</label>
        <div class="select-wrap">
          <select id="garment" name="garment" required>
            <option value="" disabled {{ old('garment') ? '' : 'selected' }}>Select option</option>
            <option value="Suit/Jacket" {{ old('garment') === 'Suit/Jacket' ? 'selected' : '' }}>Suit/Jacket</option>
            <option value="Senator" {{ old('garment') === 'Senator' ? 'selected' : '' }}>Senator</option>
            <option value="Kaftan" {{ old('garment') === 'Kaftan' ? 'selected' : '' }}>Kaftan</option>
            <option value="Agbada" {{ old('garment') === 'Agbada' ? 'selected' : '' }}>Agbada</option>
            <option value="Casual" {{ old('garment') === 'Casual' ? 'selected' : '' }}>Casual</option>
          </select>
        </div>
      </div>

      <!-- Measurements -->
      <div class="measurements">
        <div class="measure-grid">

          <div class="field">
            <label for="m_length">Length</label>
            <input id="m_length" name="m_length" type="text" placeholder="Enter number" value="{{ old('m_length') }}" />
          </div>

          <div class="field">
            <label for="m_shoulder">Shoulder</label>
            <input id="m_shoulder" name="m_shoulder" type="text" placeholder="Enter number" value="{{ old('m_shoulder') }}" />
          </div>

          <div class="field">
            <label for="m_back">Back</label>
            <input id="m_back" name="m_back" type="text" placeholder="Enter number" value="{{ old('m_back') }}" />
          </div>

          <div class="field">
            <label for="m_half_back">1/2 Back</label>
            <input id="m_half_back" name="m_half_back" type="text" placeholder="Enter number" value="{{ old('m_half_back') }}" />
          </div>

          <div class="field">
            <label for="m_waist">Waist</label>
            <input id="m_waist" name="m_waist" type="text" placeholder="Enter number" value="{{ old('m_waist') }}" />
          </div>

          <div class="field">
            <label for="m_hip">Hip</label>
            <input id="m_hip" name="m_hip" type="text" placeholder="Enter number" value="{{ old('m_hip') }}" />
          </div>

          <div class="field">
            <label for="m_neck">Neck</label>
            <input id="m_neck" name="m_neck" type="text" placeholder="Enter number" value="{{ old('m_neck') }}" />
          </div>

          <div class="field">
            <label for="m_half_length">1/2 Length</label>
            <input id="m_half_length" name="m_half_length" type="text" placeholder="Enter number" value="{{ old('m_half_length') }}" />
          </div>

          <div class="field">
            <label for="m_sleeve">Sleeve</label>
            <input id="m_sleeve" name="m_sleeve" type="text" placeholder="Enter number" value="{{ old('m_sleeve') }}" />
          </div>

          <div class="field">
            <label for="m_arm_sleeve">Arm/Sleeve</label>
            <input id="m_arm_sleeve" name="m_arm_sleeve" type="text" placeholder="Enter number" value="{{ old('m_arm_sleeve') }}" />
          </div>

          <div class="field">
            <label for="m_chest">Chest</label>
            <input id="m_chest" name="m_chest" type="text" placeholder="Enter number" value="{{ old('m_chest') }}" />
          </div>

          <div class="field">
            <label for="m_elbow">Elbow</label>
            <input id="m_elbow" name="m_elbow" type="text" placeholder="Enter number" value="{{ old('m_elbow') }}" />
          </div>

          <div class="field">
            <label for="m_armhole">Armhole</label>
            <input id="m_armhole" name="m_armhole" type="text" placeholder="Enter number" value="{{ old('m_armhole') }}" />
          </div>

        </div>
      </div>

      <!-- Upload Photo -->
      <div class="field field-full">
        <label for="photo">Upload your photo <span class="optional">(Optional)</span></label>
        <p class="field-hint">Your picture can help our designers know your actual measurement</p>

        <div class="upload-box">
          <input id="photo" name="photo" type="file" accept="image/*" class="upload-input" />
          <div class="upload-ui">

            <div class="upload-icon" aria-hidden="true">
  <svg width="44" height="44" viewBox="0 0 24 24" fill="none">
    <!-- outer picture frame -->
    <path d="M4.5 6.5C4.5 5.395 5.395 4.5 6.5 4.5H17.5C18.605 4.5 19.5 5.395 19.5 6.5V17.5C19.5 18.605 18.605 19.5 17.5 19.5H6.5C5.395 19.5 4.5 18.605 4.5 17.5V6.5Z"
          stroke="#111" stroke-width="1.4" stroke-linejoin="round"/>

    <!-- small circle (like sun) -->
    <path d="M9 9.2C9 9.863 8.463 10.4 7.8 10.4C7.137 10.4 6.6 9.863 6.6 9.2C6.6 8.537 7.137 8 7.8 8C8.463 8 9 8.537 9 9.2Z"
          stroke="#111" stroke-width="1.4"/>

    <!-- mountains -->
    <path d="M5.8 17.2L9.2 13.7C9.55 13.35 10.12 13.35 10.47 13.7L12.1 15.33L14.1 13.33C14.45 12.98 15.02 12.98 15.37 13.33L19.2 17.2"
          stroke="#111" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</div>


            <div class="upload-text">
              <div class="upload-title">Drop your files here or <span>browse</span></div>
              <div class="upload-sub">Maximum size: 8MB</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Design Idea -->
      <div class="field field-full">
        <label for="details">Tell us about your design idea <span class="optional">(Optional)</span></label>
        <textarea id="details" name="details" placeholder="Enter details">{{ old('details') }}</textarea>
      </div>

      <!-- Delivery Timeline -->
      <div class="delivery">
        <label class="delivery-label">Delivery Timeline</label>
        <p class="field-hint">Choose your preferable delivery timeline. Prices varies for the delivery options.</p>

        <div class="delivery-options">
          <label class="delivery-pill">
            <input type="radio" name="delivery_timeline" value="24 Hours (Express Delivery)" {{ old('delivery_timeline') === '24 Hours (Express Delivery)' ? 'checked' : '' }}>
            <span>24 HOURS (EXPRESS DELIVERY)</span>
          </label>

          <label class="delivery-pill">
            <input type="radio" name="delivery_timeline" value="48 Hours (Priority Delivery)" {{ old('delivery_timeline') === '48 Hours (Priority Delivery)' ? 'checked' : '' }}>
            <span>48 HOURS (PRIORITY DELIVERY)</span>
          </label>

          <label class="delivery-pill">
            <input type="radio" name="delivery_timeline" value="7 Days (Custom Order)" {{ old('delivery_timeline') === '7 Days (Custom Order)' ? 'checked' : '' }}>
            <span>7 DAYS (CUSTOM ORDER)</span>
          </label>
        </div>
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
