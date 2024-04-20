<div class="footer-container">
    <div class="container-xxl pt-4 pb-4">
        <div class="row ">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ url('home') }}" class="text-decoration-none text-white">
                    <h1 class="m-0">
                        <span>Z</span>
                        <span>E</span>
                        <span>T</span>
                        <span>A</span>
                    </h1>
                </a>
                <span class="contact">
                    <p>Địa chỉ: Số 235, Đường Quang Trung, Tổ 7, Phường Tân Thịnh, Thành phố Thái Nguyên, Tỉnh Thái Nguyên, Việt Nam</p>
                    <p>Email: zetavn@gmail.com</p>
                    <p>Điện thoại: 0865539083</p>
                </span>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                <h2 class="text-uppercase fw-bolder">Đăng ký</h2>
                <form action="" class="position-relative">
                    <input type="search" name="email-register" id="" placeholder="Nhập địa chỉ email">
                    <label for="submit-button">
                        <i data-feather="send" stroke-width="1.5" class="fa-solid fa-send"></i>
                    </label>
                    <button type="submit" id="submit-button" hidden></button>
                </form>
                <div class="d-flex justify-content-center social-network">
                    <a href="https://www.facebook.com/" class="text-white">
                        <i data-feather="facebook" fill="white" stroke-width="0.5"></i>
                    </a>

                    <a href="https://www.instagram.com/" class="text-white">
                        <i data-feather="instagram"></i>
                    </a>

                    <a href="https://www.instagram.com/" class="text-white">
                        <i data-feather="youtube"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                <h2 class="text-uppercase fw-bolder">about us</h2>
                <ul class="p-0">
                    <li>
                        <a href="{{ url('home') }}" class="text-white text-decoration-none">Trang chủ</a>
                    </li>

                    <li>
                        <a href="?product" class="text-white text-decoration-none">Sản phẩm</a>
                    </li>

                    <li>
                        <a href="?cart" class="text-white text-decoration-none">Giỏ hàng</a>
                    </li>

                    <li>
                        <a href="?account" class="text-white text-decoration-none">Tài khoản</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                <h2 class="text-uppercase fw-bolder">liên hệ</h2>
                <ul class="p-0">
                    <li>
                        <a href="mailto:someone@example.com" class="text-white text-decoration-none">Email góp ý</a>
                    </li>

                    <li>
                        <a href="?support" class="text-white text-decoration-none">
                            Hỗ trợ trực tuyến
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- <div class="chat-container">
    <div class="title">
        <i data-feather="message-square"></i>
        <span>Hỗ trợ khách hàng</span>
    </div>
    <iframe src="./chat-support.html" style="border: 0px none transparent; height: 100%; width: 100%; display: block;" frameborder="0" class="d-none"></iframe>
</div> --}}