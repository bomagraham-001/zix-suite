@extends('layouts.app')

@section('title', $product->name . ' — The Ten Clothings')

@section('content')

<div class="product-detail">
    <div class="product-detail__inner">

        <!-- Images -->
        <div class="product-detail__gallery">
            <div class="product-detail__main-image">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                @else
                    <div class="product-detail__placeholder" style="background: {{ $product->placeholder_color }}; position:relative; width:100%; aspect-ratio:3/4;">
                        <div class="garment-silhouette"></div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Info -->
        <div class="product-detail__info">
            <span class="product-card__category">{{ $product->category->name ?? 'Menswear' }}</span>
            <h1 class="product-detail__name">{{ $product->name }}</h1>
            <p class="product-detail__price">₦{{ number_format($product->price) }}</p>

            <div class="product-detail__divider"></div>

            <div class="product-detail__description">
                <p>{{ $product->description }}</p>
            </div>

            <div class="product-detail__features">
                <div class="product-feature">
                    <span class="product-feature__icon">✦</span>
                    <span>Handcrafted by master tailors</span>
                </div>
                <div class="product-feature">
                    <span class="product-feature__icon">✦</span>
                    <span>Premium fabric selection</span>
                </div>
                <div class="product-feature">
                    <span class="product-feature__icon">✦</span>
                    <span>Made-to-measure available</span>
                </div>
                <div class="product-feature">
                    <span class="product-feature__icon">✦</span>
                    <span>Nationwide delivery</span>
                </div>
            </div>

            <div class="product-detail__cta">
                <a href="{{ route('enquiry', ['product' => $product->slug]) }}" class="btn btn--primary btn--full">Make Enquiry</a>
                <a href="{{ route('shop') }}" class="btn btn--secondary btn--full" style="margin-top: 1rem;">← Back to Collection</a>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    @if($related->count())
    <section class="related-products">
        <div class="related-products__header">
            <span class="section-eyebrow">— You May Also Like —</span>
        </div>
        <div class="related-products__grid">
            @foreach($related as $item)
            <article class="product-card">
                <a href="{{ route('product', $item->slug) }}" class="product-card__image-link">
                    <div class="product-card__image">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" loading="lazy">
                        @else
                            <div class="product-card__placeholder" style="background: {{ $item->placeholder_color }}">
                                <div class="garment-silhouette"></div>
                            </div>
                        @endif
                        <div class="product-card__overlay"><span>View Details</span></div>
                    </div>
                </a>
                <div class="product-card__info">
                    <h3 class="product-card__name"><a href="{{ route('product', $item->slug) }}">{{ $item->name }}</a></h3>
                    <p class="product-card__price">₦{{ number_format($item->price) }}</p>
                </div>
            </article>
            @endforeach
        </div>
    </section>
    @endif
</div>

@endsection

@push('styles')
<style>
.product-detail { padding: calc(var(--nav-height) + 3rem) 4rem 6rem; }
.product-detail__inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: start; }
.product-detail__name { font-size: clamp(2rem, 4vw, 3.5rem); font-weight: 300; margin: 0.5rem 0 1rem; }
.product-detail__price { font-family: var(--font-display); font-size: 2rem; color: var(--color-gold-dark); margin-bottom: 2rem; }
.product-detail__divider { height: 1px; background: rgba(0,0,0,0.1); margin-bottom: 2rem; }
.product-detail__description p { font-size: 0.88rem; color: var(--color-mid); line-height: 1.9; margin-bottom: 2rem; }
.product-detail__features { display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 2.5rem; }
.product-feature { display: flex; align-items: center; gap: 0.75rem; font-size: 0.82rem; color: var(--color-mid); }
.product-feature__icon { color: var(--color-gold); font-size: 0.6rem; }
.related-products { padding: 6rem 4rem; max-width: 1300px; margin: 0 auto; }
.related-products__header { text-align: center; margin-bottom: 3rem; }
.related-products__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
@media (max-width: 768px) {
    .product-detail { padding: calc(var(--nav-height) + 2rem) 1.5rem 4rem; }
    .product-detail__inner { grid-template-columns: 1fr; gap: 2.5rem; }
    .related-products { padding: 4rem 1.5rem; }
    .related-products__grid { grid-template-columns: 1fr 1fr; }
}
</style>
@endpush
