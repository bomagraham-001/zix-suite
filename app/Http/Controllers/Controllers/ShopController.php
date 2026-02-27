<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = [
            ['name' => 'Agbada', 'slug' => 'agbada', 'count' => 12],
            ['name' => 'Senator', 'slug' => 'senator', 'count' => 8],
            ['name' => 'Kaftan', 'slug' => 'kaftan', 'count' => 6],
            ['name' => 'Suit', 'slug' => 'suit', 'count' => 7],
            ['name' => 'Native Wears', 'slug' => 'native', 'count' => 9],
        ];

        // In production, replace with actual DB query:
        // $query = Product::with('category')->when($request->category, fn($q) => $q->whereHas('category', fn($q) => $q->where('slug', $request->category)));
        // $products = $query->paginate(12);

        // Demo: use a paginator with placeholder data
        $allProducts = collect([
            (object)['id' => 1, 'name' => 'Royal Agbada', 'slug' => 'royal-agbada', 'price' => 780000, 'placeholder_color' => '#1a1a2e', 'image' => null, 'category' => (object)['name' => 'Agbada']],
            (object)['id' => 2, 'name' => 'Grand White Agbada', 'slug' => 'grand-white-agbada', 'price' => 650000, 'placeholder_color' => '#e8e0d5', 'image' => null, 'category' => (object)['name' => 'Agbada']],
            (object)['id' => 3, 'name' => 'Sky Blue Senator', 'slug' => 'sky-blue-senator', 'price' => 185000, 'placeholder_color' => '#c8d5e0', 'image' => null, 'category' => (object)['name' => 'Senator']],
            (object)['id' => 4, 'name' => 'Classic White Kaftan', 'slug' => 'classic-white-kaftan', 'price' => 145000, 'placeholder_color' => '#f5f0e8', 'image' => null, 'category' => (object)['name' => 'Kaftan']],
            (object)['id' => 5, 'name' => 'Executive Suit', 'slug' => 'executive-suit', 'price' => 320000, 'placeholder_color' => '#d5c8b0', 'image' => null, 'category' => (object)['name' => 'Suit']],
            (object)['id' => 6, 'name' => 'Ankara Native Set', 'slug' => 'ankara-native-set', 'price' => 165000, 'placeholder_color' => '#8b4513', 'image' => null, 'category' => (object)['name' => 'Native Wears']],
            (object)['id' => 7, 'name' => 'Embroidered Kaftan', 'slug' => 'embroidered-kaftan', 'price' => 210000, 'placeholder_color' => '#c8a96e', 'image' => null, 'category' => (object)['name' => 'Kaftan']],
            (object)['id' => 8, 'name' => 'Senator Cap Set', 'slug' => 'senator-cap-set', 'price' => 220000, 'placeholder_color' => '#2d4a22', 'image' => null, 'category' => (object)['name' => 'Senator']],
        ]);

        if ($request->category) {
            $allProducts = $allProducts->filter(fn($p) => strtolower($p->category->name) === str_replace('-', ' ', $request->category));
        }

        if ($request->sort === 'price_asc') {
            $allProducts = $allProducts->sortBy('price');
        } elseif ($request->sort === 'price_desc') {
            $allProducts = $allProducts->sortByDesc('price');
        }

        $products = new \Illuminate\Pagination\LengthAwarePaginator(
            $allProducts->forPage(\Illuminate\Pagination\Paginator::resolveCurrentPage(), 8),
            $allProducts->count(),
            8
        );

        return view('pages.shop', compact('categories', 'products'));
    }

    public function show(string $slug)
    {
        // In production: $product = Product::where('slug', $slug)->with(['category', 'media'])->firstOrFail();
        $product = (object)[
            'name' => 'Royal Agbada',
            'slug' => $slug,
            'price' => 780000,
            'description' => 'A masterpiece of Nigerian craftsmanship. The Royal Agbada is hand-embroidered with intricate patterns, crafted from premium aso-oke fabric, and tailored to exacting standards. This three-piece ensemble includes the outer robe, inner shirt, and matching trousers.',
            'category' => (object)['name' => 'Agbada'],
            'placeholder_color' => '#1a1a2e',
            'image' => null,
        ];

        $related = collect([
            (object)['name' => 'Grand White Agbada', 'slug' => 'grand-white-agbada', 'price' => 650000, 'placeholder_color' => '#e8e0d5', 'image' => null],
            (object)['name' => 'Embroidered Agbada', 'slug' => 'embroidered-agbada', 'price' => 580000, 'placeholder_color' => '#2d1b00', 'image' => null],
            (object)['name' => 'Statement Grand Agbada', 'slug' => 'statement-grand-agbada', 'price' => 860000, 'placeholder_color' => '#0d1117', 'image' => null],
        ]);

        return view('pages.product', compact('product', 'related'));
    }
}
