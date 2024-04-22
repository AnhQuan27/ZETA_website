@extends('layouts.guest.app')

@section('cart.index')
<div class="main-container mt-4" id="cart">
    <div class="layout container-xxl p-0">
        <div class="row me-3 ms-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                <h2>Giỏ hàng của bạn</h2>
                <table class="w-100 mb-4 mt-4">
                    <thead>
                        <tr>
                            <th class="p-3">Thông tin sản phẩm</th>
                            <th class="text-center">Đơn giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Thành tiền</th>
                            <Th class="text-center">Xoá</Th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($carts) --}}
                        @if ($carts->isNotEmpty())
                            @foreach ($carts as $cart)     
                                <tr>
                                    <td class="d-flex align-items-center p-3">
                                        <div>
                                            <img src="{{ asset($cart->image) }}" alt="">
                                        </div>
                                        <div class="">
                                            <a href="{{ url('product/'.$cart->product_id) }}">{{ $cart->name }}</a>
                                            <p class="text-danger">{{ $cart->color }} / {{ $cart->size }}</p>
                                        </div>
                                    </td>
                                    <td class="text-danger text-center fw-bolder">{{ number_format($cart->price, 0, '','.') }}đ</td>
                                    <td class="text-center">{{ $cart->amount }}</td>
                                    <td class="text-danger text-center fw-bolder">{{ number_format($cart->price * $cart->amount, 0, '','.') }}đ</td>
                                    <td>
                                        <a href="{{ url('cart/delete/'.$cart->id) }}" class="badge badge-light-error">
                                            <i data-feather="trash" stroke="#dc3545"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center p-5">
                                    Giỏ hàng của bạn trống
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <div class="buy-now float-end">
                    <p>Tổng tiền: <span class="text-danger fw-bolder float-end">{{ number_format($totalPrice, 0, '','.') }}đ</span></p>
                    <a href="order" class="btn btn-style">Mua ngay</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection