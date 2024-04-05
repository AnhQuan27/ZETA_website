@extends('layouts.guest.app')
@section('home')

<div class="main-container">
    <div class="layout container-xxl p-0">
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-4">
                <div class="product-category">Áo thun</div>
                <div class="swiper product-slide">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="more-products">
                                Xem thêm <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-4">
                <div class="product-category">Hoodie</div>
                <div class="swiper product-slide">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="more-products">
                                Xem thêm <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-4">
                <div class="product-category">Sandal</div>
                <div class="swiper product-slide">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="more-products">
                                Xem thêm <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-4">
                <div class="product-category">Giày</div>
                <div class="swiper product-slide">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item-product">
                                <form action="product-detail.html" method="get" style="display: contents;">
                                    <input type="text" value="00111" name="productID" hidden>
                                    <div class="product-thumbnail">
                                        <div class="add-to-cart">
                                            <button type="submit" class="cart">
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
                                            <a href="./product-detail.html">Áo Thun Teelab Local Brand Unisex Baseball Jersey Shirt TS228</a>
                                        </div>
                                        <div class="product-price mt-2">185.000đ</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="more-products">
                                Xem thêm <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="category-item hoodie">
                                    <a href="?hoodie" style="display: contents;">
                                        <img src="{{ asset('frontend/assets/img/samples-hoodie.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="category-item shirt">
                                    <a href="?hoodie" style="display: contents;">
                                        <img src="{{ asset('frontend/assets/img/samples-shirt.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="category-item sandal">
                                    <a href="?hoodie" style="display: contents;">
                                        <img src="{{ asset('frontend/assets/img/samples-sandal.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="category-item shoes">
                                    <a href="?hoodie" style="display: contents;">
                                        <img src="{{ asset('frontend/assets/img/samples-shoes.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection