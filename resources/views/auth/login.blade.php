@extends('layouts.guest')

@section('login')
<div class="main-container" id="login">
    <div class="layout container-xxl p-0">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-5 mt-4">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" style="display: contents;">
                    @csrf
                    <div class="fw-bolder tabs d-flex justify-content-around">
                        <a href="#" class="active">Đăng nhập</a>
                        <a href="{{ route('register') }}">Đăng ký</a>
                    </div>
                    <div class="mt-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Nhập địa chỉ Email">
                    </div>

                    <div class="mt-4 mb-4">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                    <a href="{{ route('password.email') }}">Quên mật khẩu?</a>
                    <button type="submit" class="w-100 btn-style mt-3">Đăng nhập</button>
                </form>
                <div class="text-center w-100 mt-4">
                    <p class="text-center w-50 m-auto fs-5">ZETA cam kết bảo mật và sẽ không bao giờ đăng hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection