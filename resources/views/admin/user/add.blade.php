@extends('layouts.admin.app')

@section('admin.user.add')
<div class="main-container">
    @include('layouts.admin.sidebar')
    @error('record')
        <div class="alert alert-danger p-2 mt-2" role="alert">{{ $message }}</div>
    @enderror
    <div id="content" class="main-content">
        <div class="layout-pd" id="user-add">
            <form action="{{ route('store.user') }}" method="POST" style="display:contents" enctype="multipart/form-data">
                @csrf
                <div class="container-xxl p-0">
                    <div class="row mt-5">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                            <div class="widget">
                                <span class="widget-heading mb-5">General Information</span>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                        <p class="label-avatar">Avatar</p>
                                        <label for="user-images">
                                            <img src="{{ asset('frontend/assets/img/user_default.png') }}" class="preview-images" id="preview-images">
                                        </label>
                                        <input type="file" accept="image/*" name="avatar" id="user-images" onchange="loadImage(event)" hidden>
                                    </div>
                                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                                        <div class="row">
            
                                            <div class="mb-5 col-md-6">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email" class="form-control">
                                            </div>

                                            <div class="mb-5 col-md-6">
                                                <label for="password">Password</label>
                                                <input type="text" name="password" id="password" class="form-control">
                                            </div>

                                            <div class="mb-5 col-md-6">
                                                <label for="name">User Name</label>
                                                <input type="text" name="name" id="name" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" id="address" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="phone">Phone</label>
                                                <input type="text" name="phone" id="phone" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="birthday">Birthday</label>
                                                <input type="date" name="birthday" id="birthday" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-select">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-5 col-md-6">
                                                <label for="role">Role</label>
                                                <select name="role_id" id="role" class="form-select text-capitalize">
                                                   <option value="0">Admin</option>
                                                   <option value="1">Manager</option>
                                                   <option value="2">Staff</option>
                                                   <option value="4">Customer</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-5 col-md-6">
                                                <label for="position">User Position</label>
                                                <input type="text" name="position" id="position" class="form-control">
                                            </div>

                                            <div class="m-1 col-md-12" style="text-align: right;">
                                                <input type="submit" name="submit" id="submit" class="btn btn-secondary" value="Add new">
                                            </div>
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
    var loadImage = function(event) {
        var output = document.getElementById('preview-images');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src)
        }
    };
</script>
<script>
    getUserPosition();
</script>
@endsection