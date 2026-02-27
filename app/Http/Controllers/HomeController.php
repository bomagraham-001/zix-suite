<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $collections = [
            ['image' => 'collections/senator.png', 'name' => 'Senator', 'slug' => 'senator', 'bg' => '#c8d5e0'],
            ['image' => 'collections/kaftan.png', 'name' => 'Kaftan', 'slug' => 'kaftan', 'bg' => '#e8e0d5'],
            ['image' => 'collections/suit.png', 'name' => 'Suit', 'slug' => 'suit', 'bg' => '#d5c8b0'],
            ['image' => 'collections/native.png', 'name' => 'Native Wears', 'slug' => 'native', 'bg' => '#c8b89a'],
            ['image' => 'collections/agbada.png', 'name' => 'Agbada', 'slug' => 'agbada', 'bg' => '#f0ebe0'],
        ];

        $processSteps = [
            ['title' => 'Choose Your Style', 'description' => 'Browse our curated collection or describe your custom design vision to our team.'],
            ['title' => 'Get Measured', 'description' => 'Our tailors take precise measurements to ensure a perfect, personalised fit.'],
            ['title' => 'Precision Crafted', 'description' => 'Skilled artisans bring your garment to life with meticulous attention to every detail.'],
            ['title' => 'Delivered to You', 'description' => 'Your completed garment is carefully packaged and delivered to your doorstep.'],
        ];

        $signatureStyles = [
            ['name' => 'Royal Agbada', 'price' => '₦780,000', 'bg' => '#1a1a2e'],
            ['name' => 'Embroidered Agbada', 'price' => '₦680,000', 'bg' => '#2d1b00'],
            ['name' => 'Executive Command Set', 'price' => '₦390,000', 'bg' => '#1c2b3a'],
            ['name' => 'Statement Grand Agbada', 'price' => '₦860,000+', 'bg' => '#0d1117'],
        ];

        $testimonials = [
            [
                'text' => 'I have worn agbadas from many tailors but The Ten Clothings is on a completely different level. The embroidery, the fabric, the fit — everything was perfect. I wore it to my daughter\'s wedding and the compliments haven\'t stopped.',
                'name' => 'Chinedu A.',
                'location' => 'Lagos',
                'rating' => 5,
            ],
            [
                'text' => 'Exceptional craftsmanship and attention to detail. My custom senator was delivered on time and fit like a dream. I\'ll be ordering again for my company dinner.',
                'name' => 'Emeka O.',
                'location' => 'Abuja',
                'rating' => 5,
            ],
            [
                'text' => 'The process was seamless from enquiry to delivery. The team was professional, responsive, and the end result was beyond what I imagined. Truly royalty-grade.',
                'name' => 'Biodun F.',
                'location' => 'Port Harcourt',
                'rating' => 5,
            ],
        ];

        return view('pages.home', compact('collections', 'processSteps', 'signatureStyles', 'testimonials'));
    }
}
