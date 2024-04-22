@extends('layouts.admin.app')

@section('product')
<div class="main-container">
    @include('layouts.admin.sidebar')
    <div id="content" class="main-content product">
        <div class="layout-pd">
            <div class="container-xxl p-0">
                <div class="row mt-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget position-relative ">
                            <table id="product" class="display data-tables" style="width:100%" data-add-url="{{ route('store.product') }}">
                                <thead>
                                    <tr>
                                        <th class="text-start">Product ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Sold</th>
                                        <th>Inventory</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product )    
                                    <tr>
                                        <td class="text-start">{{ $product->id }}</td>
                                        <td>
                                            {{-- <img src="{{ $product->image }}" alt=""> --}}
                                            <span>{{ $product->name }}</span>
                                        </td>
                                        <td class="product-category">{{ $product->category }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->sold }}</td>
                                        <td>{{ $product->inventory }}</td>
                                        <td class="table-action">
                                            <a class="badge badge-light-info" href="{{ url('admin/product/edit/' . $product->id) }}"><i stroke-width='1.5' data-feather="edit-3"></i></a>
                                            <a class="badge badge-light-error" href="{{ url('admin/product/delete/'.$product->id) }}"><i stroke-width='1.5' data-feather="trash"></i></a>
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
    getProductCategory();
</script>
@endsection