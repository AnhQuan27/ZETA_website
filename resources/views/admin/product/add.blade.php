@extends('layouts.admin.app')

@section('add.product')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content staff">
        <div class="layout-pd">
            <form action="{{ route('store.product') }}" method="POST" style="display:contents" enctype="multipart/form-data">
                @csrf
                <div class="container-xxl p-0">
                <div class="row mt-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
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
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="10"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <div class="mb-4">
                                        <label for="material">Material</label>
                                        <input type="text" name="material" id="material" class="form-control">
                                    </div>
                                </div>
                                
                                
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <div class="mb-4">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-select">
                                            <option value="shoes">Shoes</option>
                                            <option value="shirt">Shirt</option>
                                            <option value="sandal">Sandal</option>
                                            <option value="hoodie">Hoodie</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <div class="mb-4">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-select">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="unisex" selected>Unisex</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <div class="mb-4">
                                        <label for="unitPrice">Unit Price</label>
                                        <input type="text" name="unitPrice" id="unitPrice" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <input type="submit" name="submit" id="submit" class="form-control text-white bg-primary w-25" value="Add New">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script>
    function loadFiles(event) {
        var button = document.getElementById('image-label');
        var files = event.target.files;
        var imagePreviewDiv = document.getElementById('image-preview');
        imagePreviewDiv.innerHTML = '';
        button.textContent = `${files.length} files chosen`;

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = function(e) { // create function after reading file successfully
                var img = document.createElement('img');
                img.src = e.target.result; // data read from file (url)
                imagePreviewDiv.appendChild(img); 
            }

            reader.readAsDataURL(file);
        }
    }
</script>
@endsection