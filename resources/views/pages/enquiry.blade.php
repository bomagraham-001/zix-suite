@extends('layouts.app')

@section('title', 'Enquiries — The Ten Clothings')

@section('content')

<section class="page-hero page-hero--enquiry">
    <div class="page-hero__inner">
        <h1 class="page-hero__title">Make an <em>Enquiry</em></h1>
        <p class="page-hero__subtitle">Let's create something extraordinary together</p>
    </div>
</section>

<section class="enquiry-section">
    <div class="enquiry-section__inner">
        <div class="enquiry-info">
            <h2>Get in Touch</h2>
            <p>Have a custom design in mind? Looking for a specific garment for a special occasion? Our tailoring specialists are ready to help bring your vision to life.</p>

            <div class="enquiry-details">
                <div class="enquiry-detail">
                    <span class="enquiry-detail__icon">📍</span>
                    <div>
                        <strong>Location</strong>
                        <p>Port Harcourt, Rivers State, Nigeria</p>
                    </div>
                </div>
                <div class="enquiry-detail">
                    <span class="enquiry-detail__icon">📞</span>
                    <div>
                        <strong>Phone</strong>
                        <p><a href="tel:+2348000000000">+234 800 000 0000</a></p>
                    </div>
                </div>
                <div class="enquiry-detail">
                    <span class="enquiry-detail__icon">✉️</span>
                    <div>
                        <strong>Email</strong>
                        <p><a href="mailto:hello@thetencloths.com">hello@thetencloths.com</a></p>
                    </div>
                </div>
                <div class="enquiry-detail">
                    <span class="enquiry-detail__icon">🕐</span>
                    <div>
                        <strong>Hours</strong>
                        <p>Mon–Sat: 9AM – 6PM WAT</p>
                    </div>
                </div>
            </div>

            <div class="enquiry-social">
                <a href="#" class="social-link" aria-label="Instagram">Instagram</a>
                <a href="#" class="social-link" aria-label="Facebook">Facebook</a>
                <a href="#" class="social-link" aria-label="TikTok">TikTok</a>
            </div>
        </div>

        <div class="enquiry-form-wrapper">
            @if(session('success'))
                <div class="alert alert--success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form action="{{ route('enquiry.submit') }}" method="POST" class="enquiry-form" id="enquiryForm">
                @csrf

                @if(request('product'))
                    <input type="hidden" name="product" value="{{ request('product') }}">
                @endif

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name <span>*</span></label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required placeholder="John">
                        @error('first_name')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name <span>*</span></label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required placeholder="Doe">
                        @error('last_name')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address <span>*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="john@example.com">
                    @error('email')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number <span>*</span></label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="+234 800 000 0000">
                    @error('phone')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="garment_type">Garment Type <span>*</span></label>
                    <select id="garment_type" name="garment_type" required>
                        <option value="" disabled selected>Select a garment type</option>
                        <option value="agbada" {{ old('garment_type') === 'agbada' ? 'selected' : '' }}>Agbada</option>
                        <option value="senator" {{ old('garment_type') === 'senator' ? 'selected' : '' }}>Senator</option>
                        <option value="kaftan" {{ old('garment_type') === 'kaftan' ? 'selected' : '' }}>Kaftan</option>
                        <option value="suit" {{ old('garment_type') === 'suit' ? 'selected' : '' }}>Suit</option>
                        <option value="native" {{ old('garment_type') === 'native' ? 'selected' : '' }}>Native Wear</option>
                        <option value="custom" {{ old('garment_type') === 'custom' ? 'selected' : '' }}>Custom Design</option>
                    </select>
                    @error('garment_type')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="occasion">Occasion / Event</label>
                    <input type="text" id="occasion" name="occasion" value="{{ old('occasion') }}" placeholder="Wedding, Business, Naming Ceremony...">
                </div>

                <div class="form-group">
                    <label for="budget">Budget Range</label>
                    <select id="budget" name="budget">
                        <option value="" disabled selected>Select a budget range</option>
                        <option value="under_100k" {{ old('budget') === 'under_100k' ? 'selected' : '' }}>Under ₦100,000</option>
                        <option value="100k_250k" {{ old('budget') === '100k_250k' ? 'selected' : '' }}>₦100,000 – ₦250,000</option>
                        <option value="250k_500k" {{ old('budget') === '250k_500k' ? 'selected' : '' }}>₦250,000 – ₦500,000</option>
                        <option value="500k_1m" {{ old('budget') === '500k_1m' ? 'selected' : '' }}>₦500,000 – ₦1,000,000</option>
                        <option value="above_1m" {{ old('budget') === 'above_1m' ? 'selected' : '' }}>Above ₦1,000,000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Your Message <span>*</span></label>
                    <textarea id="message" name="message" rows="5" required placeholder="Describe your vision, preferred colours, embroidery details, or any specific requirements...">{{ old('message') }}</textarea>
                    @error('message')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn--primary btn--full">Send Enquiry</button>
            </form>
        </div>
    </div>
</section>

@endsection
