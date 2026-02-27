<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = [
            ['title' => 'Royal White Agbada', 'category' => 'agbada', 'bg' => '#f0ebe0', 'image' => null],
            ['title' => 'Classic Blue Senator', 'category' => 'senator', 'bg' => '#c8d5e0', 'image' => null],
            ['title' => 'Midnight Grand Agbada', 'category' => 'agbada', 'bg' => '#1a1a2e', 'image' => null],
            ['title' => 'Gold Embroidered Kaftan', 'category' => 'kaftan', 'bg' => '#8b6914', 'image' => null],
            ['title' => 'Charcoal Executive Suit', 'category' => 'suit', 'bg' => '#2c2c2c', 'image' => null],
            ['title' => 'Ankara Celebration Set', 'category' => 'native', 'bg' => '#8b4513', 'image' => null],
            ['title' => 'Ivory Grand Agbada', 'category' => 'agbada', 'bg' => '#f5f0e8', 'image' => null],
            ['title' => 'Navy Blue Senator', 'category' => 'senator', 'bg' => '#1c3557', 'image' => null],
            ['title' => 'Cream Kaftan Set', 'category' => 'kaftan', 'bg' => '#f0e6d3', 'image' => null],
            ['title' => 'Brown Ankara Native', 'category' => 'native', 'bg' => '#5c3317', 'image' => null],
            ['title' => 'Slim Fit Grey Suit', 'category' => 'suit', 'bg' => '#808080', 'image' => null],
            ['title' => 'Statement Agbada', 'category' => 'agbada', 'bg' => '#2d1b00', 'image' => null],
        ];

        return view('pages.gallery', compact('galleryItems'));
    }
}
