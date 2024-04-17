@extends('layouts.admin.app')

@section('add.product')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content staff">
        <div class="layout-pd">
            <div class="container-xxl p-0">
                <div class="row mt-5">
                    {{-- {{ $product_types->id }} --}}
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                        <form action="{{ url('/admin/product/update/'.$product->id) }}" method="POST" style="display:contents" enctype="multipart/form-data">
                        @csrf
                            <div class="widget">
                                <div class="mb-4">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="10">{{ $product->description }}</textarea>
                                </div>
    
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                        <div class="mb-4">
                                            <label for="material">Material</label>
                                            <input type="text" name="material" value="{{ $product->material }}"  id="material" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                        <div class="mb-4">
                                            <label for="category">Category</label>
                                            <select name="category" id="category" class="form-select">
                                                <option value="shoes" @if($product->category == 'shoes') selected="selected" @endif>Shoes</option>
                                                <option value="shirt" @if($product->category == 'shirt') selected="selected" @endif>Shirt</option>
                                                <option value="sandal" @if($product->category == 'sandal') selected="selected" @endif>Sandal</option>
                                                <option value="hoodie" @if($product->category == 'hoodie') selected="selected" @endif>Hoodie</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                        <div class="mb-4">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-select">
                                                <option value="male" @if($product->gender == 'male') selected="selected" @endif>Male</option>
                                                <option value="female" @if($product->gender == 'female') selected="selected" @endif>Female</option>
                                                <option value="unisex" @if($product->gender == 'unisex') selected="selected" @endif>Unisex</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                        <div class="mb-4">
                                            <label for="unitPrice">Unit Price</label>
                                            <input type="text" name="unitPrice" value="{{ $product->price }}" id="unitPrice" class="form-control">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="d-flex justify-content-end">
                                    <input type="submit" name="submit" id="submit" class=" btn btn-success" value="Update product">
                                </div>
                            
                            </div>
                        </form>
                    </div>

                    @foreach ($product_types as $type)
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                        <form action="{{ url('admin/product_type/update/'.$type->id) }}" method="POST" style="display:contents" enctype="multipart/form-data">
                            @csrf
    
                                <div class="widget">
                                    <div class="mb-4">
                                        <label for="color">Color</label>
                                        <input type="text" name="color" value="{{ $type->color }}" id="color" class="form-control">
                                    </div>
    
                                    <div class="mb-4">
                                        <label for="size">Size</label>
                                        <input type="text" name="size" value="{{ $type->size }}" id="size" class="form-control">
                                    </div>
    
                                    <div class="mb-4">
                                        <label for="weight">Weight</label>
                                        <input type="text" name="weight" value="{{ $type->weight }}" id="weight" class="form-control" value="N/A">
                                    </div>
    
                                    <div class="mb-4">
                                        <label for="inventory">Inventory</label>
                                        <input type="text" name="inventory" value="{{ $type->inventory }}" id="inventory" class="form-control">
                                    </div>
    
                                    
                                    <div class="mb-4">
                                        <label>Images</label>
                                        {{-- <label id="image-label" for="image-upload">Choose File</label> --}}
                                        <input type="file" name="image[]" id="image-upload" class="" multiple onchange="loadFiles(event)">
                                        <div id="image-preview">
                                            @foreach ($product_images as $image )
                                                @if ($image->product_type_id == $type->id)
                                                    <img src="/{{ $image->image }}" alt="">
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="d-flex justify-content-end">
                                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Update product type">
                                    </div>
                                </div>
                        </form>
                    </div>
                    @endforeach


                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                        <form action="{{ route('store.product_type') }}" method="POST" style="display:contents" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" id="" value="{{ $product->id }}">
                            <div class="widget">
                                <div class="mb-4">
                                    <label for="color">Color</label>
                                    <input type="text" name="color" id="color" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label for="size">Size</label>
                                    <input type="text" name="size" id="size" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label for="weight">Weight</label>
                                    <input type="text" name="weight" id="weight" class="form-control" value="N/A">
                                </div>

                                <div class="mb-4">
                                    <label for="inventory">Inventory</label>
                                    <input type="text" name="inventory" id="inventory" class="form-control">
                                </div>

                                
                                <div class="mb-4">
                                    <label>Images</label>
                                    {{-- <label id="image-label" for="image-upload">Choose File</label> --}}
                                    <input type="file" name="image[]" id="image-upload" class="" multiple>
                                    <div id="image-preview">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add product type">
                                </div>
                            </div>
    
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // function loadFiles(event) {
    //     var button = document.getElementById('image-label');
    //     var files = event.target.files;
    //     var imagePreviewDiv = document.getElementById('image-preview');
    //     imagePreviewDiv.innerHTML = '';
    //     button.textContent = `${files.length} files chosen`;

    //     for (var i = 0; i < files.length; i++) {
    //         var file = files[i];
    //         var reader = new FileReader();

    //         reader.onload = function(e) { // create function after reading file successfully
    //             var img = document.createElement('img');
    //             img.src = e.target.result; // data read from file (url)
    //             imagePreviewDiv.appendChild(img); 
    //         }

    //         reader.readAsDataURL(file);
    //     }
    // }
</script>
@endsection