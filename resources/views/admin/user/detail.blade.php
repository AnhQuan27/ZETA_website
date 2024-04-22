@extends('layouts.admin.app')

@section('admin.user')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content">
        <div class="layout-pd" id="user-detail">
            <form action="{{ url('admin/user/update/'.$user->id) }}" method="POST" style="display:contents" enctype="multipart/form-data">
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
                                            @if ($user->avatar == null)
                                                <img src="{{ asset('frontend/assets/img/user_default.png') }}" class="preview-images" id="preview-images">
                                            @else
                                                <img src="{{ asset($user->avatar) }}" class="preview-images" id="preview-images">
                                            @endif
                                        </label>
                                        <input type="file" accept="image/*" name="avatar" id="user-images" onchange="loadImage(event)" hidden>
                                    </div>
                                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                                        <div class="row">
                                            <div class="mb-5 col-md-6">
                                                <label for="name">User Name</label>
                                                <input type="text" value="{{ $user->name }}" name="name" id="name" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="address">Address</label>
                                                <input type="text" value="{{ $user->address }}" name="address" id="address" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="email">Email</label>
                                                <input type="text" value="{{ $user->email }}" readonly id="email" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="phone">Phone</label>
                                                <input type="text" value="{{ $user->phone }}" name="phone" id="phone" class="form-control">
                                            </div>
    
                                            <div class="mb-5 col-md-6">
                                                <label for="userID">User ID</label>
                                                <input type="text" value="{{ $user->id }}" readonly id="userID" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="birthday">Birthday</label>
                                                <input type="date" value="{{ $user->birthday }}" name="birthday" id="birthday" class="form-control">
                                            </div>
            
                                            <div class="mb-5 col-md-6">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-select">
                                                    <option value="male" @if($user->gender == 'male') selected @endif>Male</option>
                                                    <option value="female" @if($user->gender == 'female') selected @endif>Female</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-5 col-md-6">
                                                <label for="role">Role</label>
                                                <select name="role" id="role" class="form-select text-capitalize">
                                                    @foreach ($roles as $role )    
                                                        <option value="{{ $role->id }}" @if($user->role_id == $role->id) selected @endif>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            @if ($user->role_id <3)
                                                <div class="mb-5 col-md-6">
                                                    <label for="position">User Position</label>
                                                    <input type="text" value="{{ $user->position }}" name="position" id="position" class="form-control">
                                                </div>
                                            @else
                                                <div class="mb-5 col-md-6">
                                                    <input type="text" value="" name="position" id="position" hidden>
                                                </div>
                                            @endif
                                            
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
@endsection