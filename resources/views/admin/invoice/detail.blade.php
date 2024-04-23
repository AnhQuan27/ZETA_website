@extends('layouts.admin.app')

@section('admin.detail.invoice')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content detail-invoice">
        <div class="layout-pd">
            <form action="{{ url('admin/invoice/update/'.$invoice->id) }}" method="POST" style="display:contents">
                @csrf
                <div class="container-xxl p-0">
                    <div class="row mt-5">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                            <div class="widget">
                                <div class="row p-3">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-5">
                                            <label for="customerID">Customer</label>
                                            <input type="text" readonly value="{{ $invoice->user_id . ' - ' . $invoice->user_name }}" id="customerID" class="form-control disabled-input">
                                        </div>
        
                                        <div class="mb-5">
                                            <label for="total_price">Total Price</label>
                                            <input type="text" value="{{ $invoice->total_price }}" name="total_price" id="total_price" class="form-control">
                                        </div>
        
                                        <div class="mb-5">
                                            <label for="method">Payment Method</label>
                                            <input type="text" value="{{ $invoice->payment_method }}" name="payment_method" id="method" class="form-control">
                                        </div>


                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-5">
                                            <label for="OrderID">Order ID</label>
                                            <input type="text" value="{{ $invoice->order_id }}" readonly id="OrderID" class="form-control disabled-input">
                                        </div>
                                        
                                        <div class="mb-5">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-select text-capitalize">
                                                @foreach ($invoice_statuses as $status)
                                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                       
                                        <div class="mb-5">
                                            <label for="date">Date of payment</label>
                                            <input type="datetime-local" value="{{ $invoice->created_at }}" name="time" id="date" class="form-control">
                                        </div>
                                        
                                        <div class="d-flex justify-content-end">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
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
<script>
    getPaymentStatus();
</script>
@endsection