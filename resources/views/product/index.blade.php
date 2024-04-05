@extends('layouts.guest.app')
@section('home')

<div class="main-container">
    <div class="layout container-xxl p-0">
        <div class="row">
            @include('layouts.guest.sider')
            <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12 product-show">
                <div class="title">
                    <h1 class="text-uppercase">Tất cả sản phẩm</h1>
                </div>

                <div class="row item-list">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-5">
                        <div class="item-product">
                            <form action="" style="display: contents;">
                                <input type="text" value="00111" name="productID" hidden>
                                <div class="product-thumbnail">
                                    <div class="add-to-cart">
                                        <button type="submit" class="c">
                                            <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                        </button>
                                    </div>

                                    <a href="#">
                                        <div class="swiper product-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}" class="first">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="product-info">
                                    <div thumbsSlider="" class="swiper product-option">
                                        <div class="swiper-wrapper mt-4">
                                            <label class="swiper-slide" for="white">
                                                <img src="{{ asset('frontend/assets/img/1-08510a70-4d15-45ae-8bda-dcb419578047.png') }}"/>
                                            </label>
                                            <input type="radio" name="color" value="white" id="white" hidden checked>

                                            <label class="swiper-slide" for="black">
                                                <img src="{{ asset('frontend/assets/img/3-e9e9e394-a700-48cd-9aad-ec3d3f2b8c3c.png') }}" />
                                            </label>
                                            <input type="radio" name="color" value="black" id="black" hidden>
                                        </div>
                                    </div>

                                    <div class="product-name mt-2">
                                        <a href="">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                    </div>
                                    <div class="product-price mt-2">185.000đ</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection