<div class="sidebar-wrapper">
    <nav id="sidebar" class="position-relative">
        <div class="sidebar-toggle position-absolute">
            <i class="fa-solid fa-chevron-left" data-feather="chevron-left"></i>
        </div>

        <div class="sidebar-logo">
            <div class="d-flex align-items-center justify-content-start">
                <div class="logo-img">
                    <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="logo">
                </div>
                <h1 class="ms-2 mb-0 add-dn">ZETA</h1>
            </div>
        </div>

        <div class="profile-info">
            <div class="user-info d-flex align-items-center">
                <div class="profile-img">
                @if (Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}">
                @else
                    <img src="{{ asset('frontend/assets/img/user_defauth.png') }}">
                @endif
                </div>
                <div class="d-flex flex-column align-items-start ms-3 add-dn">
                    <h4  class="m-0">{{ last(explode(" ", Auth::user()->name)) }}</h4>
                    <p class="text-primary mb-0 fs-5 text-capitalize">{{ Auth::user()->role->name }}</p>
                </div>
            </div>
        </div>


        <ul class="sidebar-items" id="accordionExample">
            <li class="dropdown sidebar-item">
                <a href="{{ route('dashboard') }}" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between" aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-home" data-feather="home" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">Dashboard</span>
                    </div>
                </a>
            </li>

            {{-- <li class="sidebar-item">
                <a href="./message.html" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between" aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-message-square" data-feather="message-square" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">Messages</span>
                    </div>
                </a>
            </li> --}}

            <li class="sidebar-item">
                <a href="{{ route('all.product') }}" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between"  aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-layers" data-feather="layers" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">Product</span>
                    </div>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="./user.html" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between"  aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-users" data-feather="users" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">User</span>
                    </div>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="./order.html" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between"  aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-file-text" data-feather="file-text" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">Order</span>
                    </div>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="./invoice.html" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between"  aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-dollar-sign" data-feather="dollar-sign" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">Invoice</span>
                    </div>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="./support.html" class="rounded-3 dropdown-toggle d-flex align-items-center justify-content-between"  aria-expanded="false">
                    <div class="d-flex">
                        <i class="fa-solid fa-headphones" data-feather="headphones" stroke-width="1.5"></i>
                        <span class="ms-2 add-dn">Support</span>
                    </div>
                </a>
            </li>

        </ul>
    </nav>
</div>