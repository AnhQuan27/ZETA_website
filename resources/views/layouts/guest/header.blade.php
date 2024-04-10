<div class="loading-screen d-flex justify-content-center align-items-center">
    <div class="loader">
         <div class="loader-content">
             <div class="circle-grow"></div>
         </div>
    </div>
</div>

<div class="header-container">
    <div class="row">
        <div class="menu">
            <ul class="justify-content-end">

                @if (Auth::check() && Auth::user()->role_id <= 3)
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="bar-chart-2" stroke-width="1.5"></i>
                        Dashboard
                    </a>
                </li>
                @endif
                @auth
                <li>
                    <a href="#">
                        <i data-feather="heart" stroke-width="1.5"></i>
                        Yêu thích
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i data-feather="shopping-bag" stroke-width="1.5"></i>
                        Giỏ hàng
                    </a>
                </li>

                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 
                        <i data-feather="user" stroke-width="1.5"></i>
                        Tài khoản
                    </a>                       
                    <ul class="dropdown-menu collapse account-setting">
                        <li>
                            <a class="dropdown-item" href="#"><i data-feather="settings" stroke-width="1.5"></i>Quản lý</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out" stroke-width="1.5"></i>Đăng xuất</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}">
                        <i data-feather="user" stroke-width="1.5"></i>
                        Đăng nhập
                    </a>
                </li>       
                @endauth             

   

            </ul>
        </div>
    </div>

    <div class="row">
        <div class="navbar">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="">
            </a>

            <ul>
                <li>
                    <a href="{{ url('product') }}">Sản phẩm</a>
                </li>

                <li>
                    <a href="#">Nam</a>
                </li>

                <li>
                    <a href="#">Nữ</a>
                </li>

                <li>
                    <a href="#">Unisex</a>
                </li>
            </ul>

            <form action="" style="position: relative;">
                <i data-feather="search" class="fa-solid fa-search" stroke-width="2"></i>
                <input type="search" name="search" id="search">
            </form>
        </div>
    </div>

    <div class="row justify-content-center text-center">
        <div class="news">
            <div class="swiper swiperNews">
                <div class="swiper-wrapper">
                <div class="swiper-slide">Free shipping cho hoá đơn từ 900k!</div>
                <div class="swiper-slide">Hỗ trợ đổi trả sản phẩm</div>
                <div class="swiper-slide">Chăm sóc khách hàng tận tình</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    @if (!Request::is('login') && !Request::is('register') && !Request::is('forgot-password'))
    <div class="row justify-content-center text-center">
        <div class="slides">
            <div class="swiper swiperSlides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/img/slider_1.jpeg') }}" alt="">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/img/slider_2.jpeg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/img/slider_3.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="slogan text-center">
            <h1>Blow Your Youth</h1>
            <p>Nơi hội tụ những tâm hồn đồng điệu, cùng nhau tạo nên những điều phi thường! Hãy tham gia cùng ZETA, để tuổi trẻ của bạn không bao giờ hối tiếc!</p>
        </div>
    </div>
    @endif
</div>