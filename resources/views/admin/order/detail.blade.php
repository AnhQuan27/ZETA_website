@extends('layouts.admin.app')

@section('admin.detail.order')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content detail-order">
        <div class="layout-pd">
            <form action="{{ url('admin/order/update/'.$order->id) }}" method="POST" style="display:contents">
                @csrf
                <div class="container-xxl p-0">
                    <div class="row mt-5">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                            <div class="widget">
                                <div class="row p-3">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mb-5">Customer Information</h2>
                                        <div class="mb-5">
                                            <label for="customer_id">Customer ID</label>
                                            <input type="text" value="{{ $order->user_id }}" readonly id="customer_id" class="form-control disabled-input">
                                        </div>
        
                                        <div class="mb-5">
                                            <label for="cart_id">Cart ID</label>
                                            <input type="text" value="{{ $order->cart_id }}" id="cart_id" readonly class="form-control disabled-input">
                                        </div>
                               
                                        <div class="mb-5">
                                            <label for="user_name">User Name</label>
                                            <input type="text" value="{{ $order->user_name }}" readonly id="user_name" class="form-control disabled-input">
                                        </div> 

                                        <div class="mb-5">
                                            <label for="user_phone">User Phone</label>
                                            <input type="text" value="{{ $order->user_phone }}" readonly id="user_phone" class="form-control disabled-input">
                                        </div>

                                        <div class="mb-5">
                                            <label class="me-2">Invoice:</label>
                                            <a href="{{ url('admin/invoice/detail/'.$order->invoice_id) }}" style="font-size: 1.3rem;">#{{ $order->invoice_id }}</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mb-5">Order Information</h2>
                                        <div class="mb-5">
                                            <label for="total_price">Total Price</label>
                                            <input type="text" name="total_price" id="total_price" value="{{ $order->total_price }}" class="form-control">
                                        </div>
        
                                        <div class="mb-5">
                                            <label for="created_at">Created At</label>
                                            <input type="datetime-local" name="created_at" id="created_at" value="{{ $order->created_at }}" class="form-control">
                                        </div>

                                        <div class="mb-5">
                                            <label for="note">Note</label>
                                            <textarea name="note" id="note" name="note "class="form-control" rows="10">{{ $order->note }}</textarea>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <input type="submit" name="submit" id="submit" class="btn btn-success" value="Update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection