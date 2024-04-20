@extends('layouts.guest.app')
@section('home')

<div class="main-container">
    <div class="layout container-xxl p-0">
        {{-- @dd($categoryData) --}}
        
        @foreach ($categoryData as $item)
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-4">
                <div class="product-category text-capitalize">@switch($item['category']->category)
                    @case('shirt')
                        Áo thun
                        @break
                    @case('shoes')
                        Giày
                        @break
                    @default
                        {{ $item['category']->category }}
                @endswitch</div>
                <div class="swiper product-slide">
                    <div class="swiper-wrapper">
                        @foreach (array_reverse($item['products']) as $product)                          
                        <div class="swiper-slide">
                            <div class="item-product">
                                <form method="POST" action="{{ route('store.cart', $product['product']->id, 'add-to-cart') }}" style="display: contents;">
                                    @csrf
                                    <input type="hidden" name="productID" value="{{ $product['product']->id }}">
                                    <input type="hidden" name="amount" value="1">
                                    <input type="hidden" value="{{ $product['product']->id }}" name="productID">
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
                                                <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                            </button>
                                        </div>

                                        <a href="{{ url('product/'.$product['product']->id) }}">
                                            <div class="swiper product-preview">
                                                <div class="swiper-wrapper">

                                                    @foreach ($product['product_types'] as $product_type)

                                                        @if ($product_type['product_images']->isNotEmpty())

                                                            <div class="swiper-slide">
                                                                <img src="{{ $product_type['product_images']->first()->image }}">
                                                            </div>

                                                        @endif

                                                    @endforeach

                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div thumbsSlider="" class="swiper product-option">
                                            <div class="swiper-wrapper mt-4">

                                                @foreach ($product['product_types'] as $product_type)
                                                    @if ($loop->first)
                                                        <input type="radio" hidden checked name="size" value="{{ $product_type['product_type']->size }}">
                                                    @endif
                                                    @if ($product_type['product_images']->isNotEmpty())
                                                        <label class="swiper-slide" for="{{ $product_type['product_type']->color }}">
                                                            <img src="{{ $product_type['product_images']->first()->image }}">
                                                        </label>
                                                        <input type="radio" name="color" id="{{ $product_type['product_type']->color }}" value="{{ $product_type['product_type']->color }}" hidden @if ($loop->first) checked @endif>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>

                                        <div class="product-name mt-2">
                                            <a href="{{ url('product/'.$product['product']->id) }}">{{ $product['product']->name }}</a>
                                        </div>
                                        <div class="product-price mt-2">{{ number_format($product['product']->price, 0, ',', '.') }}đ</div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        @endforeach

                        <div class="swiper-slide">
                            <a href="#" class="more-products">
                                Xem thêm <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="category-container">
    <div class="container-xxl">
        <hr>
        <h1 class="text-center fw-bold mt-5">Khám phá cùng ZETA</h1>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="m-5 categories">
                    <div class="container-xxl">
                        <div class="row">
                            @foreach ($categoryData as $item)
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="category-item {{ $item['category']->category }}">
                                        <a href="{{ url('category/'.$item['category']->category) }}" style="display: contents;">
                                            <img src="{{ asset('frontend/assets/img/samples-' .$item['category']->category. '.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection