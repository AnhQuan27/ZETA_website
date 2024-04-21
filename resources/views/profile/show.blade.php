@extends('layouts.guest.app')

@section('profile.show')
<div class="main-container mt-4" id="profile">
    <div class="layout container-xxl p-0">
        <div class="row me-3 ms-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                <div class="widget">
                    <h1 class="widget-heading mb-5 mt-2">Thông tin tài khoản</h1>
                    <div class="row">
                        <form action="" method="POST" style="display: contents" enctype="multipart/form-data">
                        @csrf
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <p>Avatar</p>
                                <label for="user-images">
                                    @if (Auth::user()->avatar == null)
                                        <img src="{{ asset('frontend/assets/img/user_default.png') }}" class="preview-images" id="preview-images">
                                    @else
                                        <img src="{{ asset(Auth::user()->avatar) }}" class="preview-images" id="preview-images">
                                    @endif
                                </label>
                                <input type="file" accept="image/*" name="avatar" id="user-images" onchange="loadImage(event)" hidden>
                            </div>
                            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                                <div class="row">
                                @if (Auth::user()->role_id <= 3)                                    
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                        <label for="position">Position</label>
                                        <input type="text" readonly value="{{ Auth::user()->position }}" id="position" class="form-control disabled-input">
                                    </div>
                                @endif

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" readonly value="{{ Auth::user()->email }}" class="form-control">
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" value="{{ Auth::user()->address }}" class="form-control">
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}" class="form-control">
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" name="birthday" id="birthday" value="{{ Auth::user()->birthday }}" class="form-control">
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="male" @if(Auth::user()->gender == 'male') selected @endif>Male</option>
                                        <option value="female" @if(Auth::user()->gender == 'female') selected @endif>Female</option>
                                    </select>
                                </div>

                                <div class="m-1 col-md-12" style="text-align: right;">
                                    <button type="submit" id="submit" class="btn btn-success">Cập nhật thông tin</button>
                                </div>
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
var loadImage = function(event) {
    var output = document.getElementById('preview-images');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
};

</script>
@endsection