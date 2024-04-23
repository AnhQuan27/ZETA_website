@extends('layouts.admin.app')

@section('admin.all.invoice')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content invoice">
        <div class="layout-pd">
            <div class="container-xxl p-0">
                <div class="row mt-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget position-relative ">
                            <table id="invoice" class="display data-tables" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-start">Invoice ID</th>
                                        <th class="text-start">Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Created Date</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoice)    
                                        <tr>
                                            <td class="text-start">#{{ $invoice->id }}</td>
                                            <td class="text-start">#{{ $invoice->order_id }}</td>
                                            <td class="d-flex align-items-center">
                                                <div class="user-img">
                                                    @if ($invoice->user_avatar == null)
                                                        <img src="{{ asset('frontend/assets/img/user_default.png') }}">
                                                    @else
                                                        <img src="{{ asset($invoice->user_avatar) }}" alt="">
                                                    @endif
                                                    
                                                </div>
                                                <span>{{ $invoice->user_name }}</span>
                                            </td>
                                            <td>{{ $invoice->created_at }}</td>
                                            <td class="text-danger">{{ number_format($invoice->total_price, 0,'', '.') }}đ</td>
                                            <td>
                                                <span class="status text-capitalize">
                                                    {{ $invoice->invoice_status }}
                                                </span>
                                            </td>
                                            <td class="table-action">
                                                <a class="badge badge-light-info"  href="{{ url('admin/invoice/detail/'.$invoice->id) }}"><i stroke-width='1.5' data-feather="edit-3"></i></a>
                                                <a class="badge badge-light-error" href="{{ url('admin/invoice/delete/'.$invoice->id) }}"><i stroke-width='1.5' data-feather="trash"></i></a>

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