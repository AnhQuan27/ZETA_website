@extends('layouts.guest.app')
@section('product.detail')
{{-- @dd($productData) --}}
{{-- @dd($productDataByCategory) --}}
{{-- @dd($productData) --}}
<div class="main-container mt-5" id="detail">
    <div class="layout container-xxl p-0">
        <div class="row me-3 ms-3">
            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="swiper detail-image">
                    <div class="swiper-wrapper">
                        @foreach ($productData['product_types'] as $product_type)
                            @foreach ($product_type['product_images'] as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset($image->image) }}">
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper detail-preview">
                    <div class="swiper-wrapper">
                        @foreach ($productData['product_types'] as $product_type)
                            @foreach ($product_type['product_images'] as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset($image->image) }}">
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>


                <div class="product-detail mt-5">
                    <h2 class="mb-3">Thông tin sản phẩm</h2>
                    <p>
                        - Form: Oversize
                    </p>
                    <p>
                        - Chất liệu: {{ $productData['product']->material }}
                    </p>
                    <p>
                        - Màu sắc:
                        @php $colors = []; @endphp
                        @foreach ($productData['product_types'] as $product_type)
                            @if ($product_type['product_images']->isNotEmpty())
                                @php
                                    $colors[] = $product_type['product_type']->color;
                                @endphp
                            @endif
                        @endforeach
                        {{ implode(", ", $colors) }}
                    </p>
                    <p>
                        - Thiết kế: In
                    </p>
                </div>
                
                <div class="user-manual mt-5">
                    <h2 class="mb-3">Hướng dẫn sử dụng sản phẩm của ZETA</h2>
                    <span style="white-space: break-spaces; line-height: 4rem;">{{ $productData['product']->description }}</span>
                </div>

                <div class="warranty-policy mt-5">
                    <h2 class="mb-3">Chính sách bảo hành</h2>
                    <p>
                        - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng.
                    </p>
                    <p>
                        - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng
                    </p>
                    <p>
                        - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ms-5">
                <h1 class="product-name fw-bolder" >{{ $productData['product'] ->name }}</h1>
                <hr>
                <span class="text-danger mb-4" style="font-size: 3rem; font-weight: 400;">
                    {{ number_format($productData['product']->price, 0, ',', '.') }}đ
                </span>
                <div class="product-policy">
                    <div class="">
                        <i data-feather="corner-up-left"></i>
                        <span>Đổi trả dễ dàng</span>
                    </div>

                    <div class="">
                        <i data-feather="check-circle"></i>
                        <span>Chính hãng 100%</span>
                    </div>

                    <div class="">
                        <i data-feather="truck"></i>
                        <span>Giao toàn quốc</span>
                    </div>
                </div>

                <div class="top-sales mt-3">
                    <div class="">
                        <i data-feather="award" stroke-width="1.5"></i>
                        <span>Top bán chạy</span>
                    </div>
                    <a href="./product-list.html?top-sales">
                        Sản phẩm bán chạy nhất
                        <i data-feather="chevron-right" stroke-width="1.5" stroke="black" width="1.5rem" style="stroke: black;"></i>
                    </a>
                </div>

                <div class="product-summary mt-3">
                    <p>Thông tin sản phẩm:</p>
                    <p>- Chất liệu: {{  $productData['product'] ->material }}</p>
                    <p>- Màu sắc:
                    @php $colors = []; @endphp
                    @foreach ($productData['product_types'] as $product_type)
                        @if ($product_type['product_images']->isNotEmpty())
                            @php
                                $colors[] = $product_type['product_type']->color;
                            @endphp
                        @endif
                    @endforeach
                    {{ implode(", ", $colors) }}
                    </p>
                    <p>- Thiết kế: Thêu và in</p>
                </div>
                <form action="" method="POST" style="display:contents;" id="dataProduct">
                    @csrf
                    <input type="hidden" name="productID" value="{{ $productData['product']->id }}">

                    <div class="color-option">
                        <p class="m-0">Chọn màu</p>

                        @foreach ($productData['product_types'] as $product_type)
                            @if ($product_type['product_images']->isNotEmpty())
                                
                                <input type="radio" name="color" value="{{ $product_type['product_type']->color }}" id="{{ $product_type['product_type']->color }}" hidden @if ($loop->first)
                                    checked
                                @endif>
                                <label for="{{ $product_type['product_type']->color }}" class="me-2" style="background-image: url({{ asset($product_type['product_images']->first()->image) }});"></label>

                            @endif
                        @endforeach

                    </div>

                    <div class="size-option mt-2">
                        <p class="m-0">Size</p>
                        @foreach ($sizes as $size)
                            <input type="radio" name="size" value="{{ $size->size }}" id="{{ $size->size }}-size" hidden @if ($loop->first)
                                checked
                            @endif>
                            <label for="{{ $size->size }}-size" class="me-2 text-uppercase">{{ $size->size }}</label>
                        @endforeach
                    </div>

                    <div class="quantity-option mt-3">
                        <div class="m-0  w-auto">Số lượng</div>
                        <div class="input-option">
                            <span class="minus">-</span>
                            <input type="number" name="amount" id="amount" class="form-text" value="1">
                            <span class="plus">+</span>
                        </div>
                    </div>

                    <div class="quantity-in-stock mt-3">
                        <p>Số lượng còn lại trong kho: <span class="ms-2">{{ $inventory->inventory }}</span></p>
                    </div>

                    <div class="buy-now me-4">
                        <button type="submit" class="btn-style" formaction="{{ ('store.order') }}">Mua ngay</button>
                    </div>

                    <div class="add-to-cart">
                        <button type="submit" class="cart btn-style" formaction="{{ route('store.cart', $productData['product']->id, 'add-to-cart') }}">
                            Thêm vào giỏ hàng
                            <i data-feather="shopping-cart" id="addToCart" stroke-width="1.5" color="white"></i>
                        </button>
                    </div>

                </form>
            </div>

        </div>

        <div class="row m-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                <h1 class="text-uppercase fw-bolder text-center w-auto">
                    Sản phẩm tương tự
                    <hr>
                </h1>
                <div class="swiper product-slide mt-5">
                    <div class="swiper-wrapper">
                        @foreach ($productDataByCategory as $product)
                            <div class="swiper-slide">
                                <div class="item-product">
                                    <form action="product-detail.html" method="get" style="display: contents;">
                                        <input type="text" value="00111" name="product" hidden>
                                        <div class="product-thumbnail">
                                            <div class="add-to-cart">
                                                <button type="submit">
                                                    <i data-feather="shopping-cart" stroke-width="1.8" color="white"></i>
                                                </button>
                                            </div>

                                            <a href="{{ $product['product']->id }}">
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
                                                        @if ($product_type['product_images']->isNotEmpty())
                                                            
                                                            <label class="swiper-slide" for="{{ $product_type['product_type']->color }}">
                                                                @foreach ($product_type['product_images'] as $product_image)
                                                    
                                                                <img src="{{ asset($product_image->image) }}"/>
                                                                @endforeach
                                                                
                                                            </label>
                                                            <input type="radio" name="color" value="{{ $product_type['product_type']->color }}" id="{{ $product_type['product_type']->color }}" hidden checked>
                                                        @endif

                                                    @endforeach

                                                </div>
                                            </div>

                                            <div class="product-name mt-2">
                                                <a href="{{ $product['product']->id }}">{{ $product['product']->name }}</a>
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
    </div>
</div>
<script>
    // document.getElementById('addToCart').addEventListener('click', function(e){
    //     e.preventDefault();

    //     var formData = new FormData(document.getElementById('dataProduct'));
    //     axios.post('/add-to-cart', formData)
    //         .then(function(response) {
    //             console.log(response.data);
    //         }).catch(function(error) {
    //             // Xử lý lỗi nếu có
    //             console.error(error);
    //         });
    // })
</script>
@endsection
