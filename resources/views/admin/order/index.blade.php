@extends('layouts.admin.app')

@section('admin.all.order')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content order">
        <div class="layout-pd">
            <div class="container-xxl p-0">
                <div class="row mt-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget position-relative ">
                            <table id="order" class="display data-tables" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-start">Order ID</th>
                                        <th>Cart ID</th>
                                        <th>Customer Name</th>
                                        <th>User Email</th>
                                        <th>User Phone</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)        
                                        <tr>
                                            <td class="text-start">{{ $order->id }}</td>
                                            <td class="text-start">{{ $order->cart_id }}</td>
                                            <td class="d-flex align-items-center">
                                                <div class="user-img">
                                                    @if ($order->user_avatar == null)
                                                        <img src="{{ asset('frontend/assets/img/user_default.png') }}">
                                                    @else
                                                        <img src="{{ asset($order->user_avatar) }}" alt="">
                                                    @endif
                                                    
                                                </div>
                                                <span>{{ $order->user_name }}</span>
                                            </td>
                                            <td>
                                                <i class="fa-solid fa-mail" data-feather="mail" stroke-width="1.5"></i>
                                                <span>{{ $order->user_email }}</span>
                                            </td>
                                            <td>{{ $order->user_phone }}</td>
                                            <td class="text-danger">{{ number_format($order->total_price, 0, '', '.') }}đ</td>
                                            <td>
                                                <span class="status text-capitalize">
                                                    {{ $order->invoice_status }}
                                                </span>
                                            </td>
                                            <td class="table-action">
                                                <a class="badge badge-light-info" href="{{ url('admin/order/detail/'.$order->id) }}"><i stroke-width='1.5' data-feather="edit-3"></i></a>
                                                <a class="badge badge-light-error" href="{{ url('admin/order/delete/'.$order->id) }}"><i stroke-width='1.5' data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    getPaymentStatus();
</script>
@endsection