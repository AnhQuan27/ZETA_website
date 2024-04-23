@extends('layouts.guest.app')
    
@section('cart.invoice')
{{-- @dd($data) --}}
<div class="main-container mt-4" id="invoice">
    <div class="layout container-xxl p-0">
        <div class="row me-3 ms-3 justify-content-center mt-5 mb-5">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 mb-4">
                <div class="invoice-container">
                    <div class="invoice-header d-flex align-items-center">
                        <div class="invoice-status-icon">
                            <i data-feather="check-circle" class="fa-solid fa-check text-success" stroke-width="2"></i>
                        </div>
                        <span class="">
                            <h1 class="text-success fw-bolder">Payment Successful</h1>
                            <p class="fs-4">Đơn hàng của bạn đã được xác nhận! Dưới đây là chi tiết đơn hàng</p>
                        </span>
                    </div>
                    <hr>
                    <div class="invoice-content">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bolder">
                                    Mã hoá đơn:
                                </td>
                                <td>
                                    {{ $data['invoice_id'] }}
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="fw-bolder">
                                    Mã đơn hàng:
                                </td>
                                <td>
                                    {{ $data['order_id'] }}
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bolder">
                                    Phương thức thanh toán:
                                </td>
                                <td>
                                    @if ($data['payment_method'] == 'vnp_banking')
                                        VNPAY Banking
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bolder">
                                    Tổng tiền đã thanh toán:
                                </td>
                                <td>
                                    {{ number_format($data['total_price'], 0, '', '.') }} đồng
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bolder">
                                    Thời gian thanh toán:
                                </td>
                                <td>
                                    {{ $data['created_at'] }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                </div>
                <div class="action-button text-center mt-5">
                    <a href="{{ url('/') }}" class="btn btn-secondary">Quay về trang chủ</a>
                    <button id="print-button" class="btn btn-primary">In hoá đơn</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    function capture() {
        const captureElement = document.querySelector('.invoice-container')
        html2canvas(captureElement)
            .then(canvas => {
                canvas.style.display = 'none'
                document.body.appendChild(canvas)
                return canvas
            })
            .then(canvas => {
                const image = canvas.toDataURL('image/png')
                const a = document.createElement('a')
                a.setAttribute('download', `zeta_invoice_{{ $data['invoice_id'] }}.png`)
                a.setAttribute('href', image)
                a.click()
                canvas.remove()
            })
    }

    const btn = document.querySelector('#print-button')
    btn.addEventListener('click', capture)
</script>
@endsection