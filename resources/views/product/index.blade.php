@extends('layouts.guest.app')
@section('product.index')
{{-- @dd($productData) --}}
<div class="main-container pt-4" id="productsSection">
    <div class="layout container-xxl p-0">
        <div class="row">
            @include('layouts.guest.sider')
            <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12 product-show">
                <div class="title">
                    <h1 class="text-uppercase">Tất cả sản phẩm</h1>
                </div>

                <div class="row item-list">
                    {{-- @dd($productData) --}}
                    @foreach (array_reverse($productData) as $product)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                            <div class="item-product">
                                <form method="POST" action="{{ route('store.cart', $product['product']->id, 'add-to-cart') }}" style="display: contents;">
                                    @csrf
                                    <input type="hidden" name="productID" value="{{ $product['product']->id }}">
                                    <input type="hidden" name="amount" value="1">
                                    <input type="hidden" value="{{ $product['product']->id }}" name="productID">
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="c">
                                                <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                            </button>
                                        </div>
                                    <a href="{{ url('product/'.$product['product']->id) }}">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">

                                                @foreach ($product['product_types'] as $product_type)
                                                    @if ($product_type['product_images']->isNotEmpty())

                                                        <div class="swiper-slide">
                                                            <div class="swiper-slide">
                                                                <img src="{{ asset($product_type['product_images']->first()->image) }}">
                                                            </div>
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
                                                            <img src="{{ asset($product_type['product_images']->first()->image) }}">
                                                        </label>
                                                        <input type="radio" name="color" value="{{ $product_type['product_type']->color }}" id="{{ $product_type['product_type']->color }}" hidden @if ($loop->first) checked @endif>
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
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        const targetElement = document.getElementById('productsSection');
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        }
    };
</script>
@endsection