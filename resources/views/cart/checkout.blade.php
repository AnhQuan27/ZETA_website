@extends('layouts.guest.app')
    
@section('cart.checkout')
{{-- @dd($carts) --}}
<div class="main-container mt-4" id="checkout">
    <div class="layout container-xxl p-0">
        <div class="row me-3 ms-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                <div class="row">
                    <form action="{{ route('vnpay_payment') }}" method="POST" style="display: contents">
                        @csrf
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4 ps-3 pe-3">
                            <h2>Thông tin đơn hàng</h2>
                            
                            <div class="">
                                <hr>
                                <p>Mã đơn hàng: {{ $order->id }}</p>
                                <hr>
                                <p>
                                    Họ và tên: {{ Auth::user()->name }}
                                </p>
                                <hr>
                                <p>
                                    SĐT: {{ Auth::user()->phone }}
                                </p>
                                <hr>
                                <p>
                                    Email: {{ Auth::user()->email }}
                                </p>
                                <hr>
                                <p>Ngân hàng thanh toán</p>
                                <div class="d-flex flex-column">
                                    <div class="bank-container">
                                        <input type="radio" name="bank_code" value="NCB" id="NCB" checked>
                                        <img src="{{ asset('frontend/assets/img/logo-ncb.png') }}" alt="">
                                    </div>
                                    <div class="bank-container">
                                        <input type="radio" name="bank_code" value="BIDV" id="BIDV">
                                        <img src="{{ asset('frontend/assets/img/logo-bidv.png') }}" alt="">
                                    </div>
                                </div>
                                
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4 ps-3 pe-3">
                            @foreach ($carts as $cart)     
                                <div class="d-flex mb-3">
                    
                                    <div class="position-relative" style="height: 6rem; width: 6rem; object-fit: cover;">
                                        <img src="{{ asset($cart->image) }}" style="height: 100%; width: auto;">
                                        <span class="position-absolute checkout-amount" >{{ $cart->amount }}</span>
                                    </div>
                                    <div class="w-100 ms-4">
                                        <p class="m-0">{{ $cart->name }}</p>
                                        <p class="text-danger m-0">{{ $cart->color }} / {{ $cart->size }}</p>
                                    </div>

                                    <div class="ms-4">
                                        <p class="m-0 text-danger">{{ number_format($cart->price, 0, '','.') }}đ</p>
                                    </div>
                                </div>
                            @endforeach
                            <input type="hidden" name="orderId" value="{{ $order->id }}">
                            <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">
                            <input type="hidden" name="cartId" value="{{ $cart->cart_id }}">
                            <div class="buy-now float-end">
                                <p>Tổng tiền: <span class="text-danger fw-bolder float-end">{{ number_format($totalPrice, 0, '','.') }}đ</span></p>
                                <button type="submit" name="redirect" class="btn-style">Thanh toán</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection