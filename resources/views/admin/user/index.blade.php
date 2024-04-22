@extends('layouts.admin.app')

@section('admin.user')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content user">
        <div class="layout-pd">
            <div class="container-xxl p-0">
                <div class="row mt-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget position-relative">
                            <table id="user" class="display data-tables" style="width:100%" data-add-url="{{ route('store.user') }}">
                                <thead>
                                    <tr>
                                        <th class="text-start">User ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-start">{{ $user->id }}</td>
                                            <td class="d-flex align-items-center">
                                                <div class="user-img">
                                                     @if ($user->avatar == null)
                                                        <img src="{{ asset('frontend/assets/img/user_default.png') }}">
                                                    @else
                                                        <img src="{{ asset($user->avatar) }}" alt="">
                                                    @endif
                                                    
                                                </div>
                                                <span>{{ $user->name }}</span>
                                            </td>
                                            <td class="text-capitalize">{{ $user->role_name }}</td>
                                            <td class="text-capitalize">
                                                @if ($user->position == null)
                                                    None
                                                @else
                                                    {{ $user->position }}
                                                @endif
                                            </td>
                                            <td>
                                                <span class="fa-mail">{{ $user->email }}</span>
                                            </td>
                                            <td>{{ $user->phone }}</td>
                                            <td class="table-action">
                                                <a class="badge badge-light-info" href="{{ url('admin/user/edit/'.$user->id) }}"><i stroke-width='1.5' data-feather="edit-3"></i></a>
                                                <a class="badge badge-light-error" href="{{ url('admin/user/delete/'.$user->id) }}"><i stroke-width='1.5' data-feather="trash"></i></a>
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
@endsection