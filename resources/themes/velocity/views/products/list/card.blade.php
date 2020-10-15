@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')
@inject ('toolbarHelper', 'Webkul\Product\Helpers\Toolbar')
{{-- @include('shop::UI.product-quick-view') --}}

@push('css')
    <style type="text/css">
        .list-card .wishlist-icon i {
            padding-left: 10px;
        }

        .product-price span:first-child, .product-price span:last-child {
            font-size: 18px;
            font-weight: 600;
        }
    </style>
@endpush

@php
    if (isset($checkmode) && $checkmode && $toolbarHelper->getCurrentMode() == "list") {
        $list = true;
    }
@endphp

@php
    $productBaseImage = $productImageHelper->getProductBaseImage($product);
    $totalReviews = $reviewHelper->getTotalReviews($product);
    $avgRatings = ceil($reviewHelper->getAverageRating($product));
@endphp

{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}
    @if (isset($list) && $list)

        <div class="col-md-12">
            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">

            <div class="one-third mb-4 mb-md-0">

                <div class="job-post-item-header align-items-center">

                    <span class="subadge">Partime</span>

                    <h2 class="mr-3 text-black">
                        <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                        @include ('shop::products.price', ['product' => $product])
                    </h2>
                    

                </div>

                <div class="job-post-item-body d-block d-md-flex">

                    <div class="mr-3">
                        
                        <span class="icon-layers"></span>
                            <a href="#">Facebook, Inc.</a>
                    </div>

                    <div>
                        <span class="icon-my_location"></span> 
                        <span>Western City, UK</span>
                    </div>

                </div>

            </div>
            
           
                        @include ('shop::products.add-to-cart', [
                            'product' => $product,
                            'showCompare' => false,
                            'showWishlist' => false,
                            'addWishlistClass' => 'pl10',
                            'addToCartBtnClass' => 'medium-padding'
                        ])


            </div>
        </div>
   
    @else
        <div class="card grid-card product-card-new">
            <a
                href="{{ route('shop.productOrCategory.index', $product->url_key) }}"
                title="{{ $product->name }}"
                class="product-image-container">

                <img
					loading="lazy"
                    class="card-img-top"
                    alt="{{ $product->name }}"
                    src="{{ $productBaseImage['large_image_url'] }}"
                    :onerror="`this.src='${this.$root.baseUrl}/vendor/webkul/ui/assets/images/product/large-product-placeholder.png'`" />

                    {{-- <product-quick-view-btn :quick-view-details="product"></product-quick-view-btn> --}}
            </a>

            <div class="card-body">
                <div class="product-name col-12 no-padding">
                    <a
                        href="{{ route('shop.productOrCategory.index', $product->url_key) }}"
                        title="{{ $product->name }}"
                        class="unset">

                        <span class="fs16">{{ $product->name }}</span>
                    </a>
                </div>

                <div class="product-price fs16">
                    @include ('shop::products.price', ['product' => $product])
                </div>

                @if ($totalReviews)
                    <div class="product-rating col-12 no-padding">
                        <star-ratings ratings="{{ $avgRatings }}"></star-ratings>
                        <span class="align-top">
                            {{ __('velocity::app.products.ratings', ['totalRatings' => $totalReviews ]) }}
                        </span>
                    </div>
                @else
                    <div class="product-rating col-12 no-padding">
                        <span class="fs14">{{ __('velocity::app.products.be-first-review') }}</span>
                    </div>
                @endif

                <div class="cart-wish-wrap no-padding ml0">
                    @include ('shop::products.add-to-cart', [
                        'showCompare'       => true,
                        'product'           => $product,
                        'btnText'           => $btnText ?? null,
                        'moveToCart'        => $moveToCart ?? null,
                        'reloadPage'        => $reloadPage ?? null,
                        'addToCartForm'     => $addToCartForm ?? false,
                        'addToCartBtnClass' => $addToCartBtnClass ?? '',
                    ])
                </div>
            </div>
        </div>
    @endif

{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}
