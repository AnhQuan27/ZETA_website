<div class="loading-screen d-flex justify-content-center align-items-center">
    <div class="loader">
         <div class="loader-content">
             <div class="circle-grow"></div>
         </div>
    </div>
</div>

<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm">
        <div class="greeting">
            <h3>Hi {{ Auth::user()->name }}</h3>
        </div>
        <ul class="navbar-items flex-row ms-lg-auto ms-0">
            <li class="navbar-item">
                <a href="javascript:void(0);" class="bg-mode">
                    <i data-feather="sun" class="fa-sun"></i>
                </a>
            </li>

            <li class="navbar-item position-relative drop-element dropdown">
                <a href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i data-feather="circle" class="fa-solid fa-circle position-absolute"></i>
                    <i data-feather="bell" stroke-width="1.5" class="fa-regular fa-bell fa-icon"></i>
                </a>
                
                <div class="dropdown-card position-absolute dropdown-menu drop-notify">
                    <div class="dropdown">
                        <div class="dropdown-title pb-1">
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-0 align-self-center">Messages</h4>
                                <a href="">
                                    <span class="badge bg-primary text-center">9 Unread</span>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="dropdown-content pt-0">
                            <a class="dropdown-item position-relative" href="#">
                                <div class="message d-flex justify-content-start">
                                    <div class="message-image">
                                        <img src="./assets/img/profile-15.jpeg" alt="">
                                    </div>

                                    <div class="message-info">
                                        <span>User</span>
                                        <p class="fw-medium">1 hour ago</p>
                                    </div>

                                    <i data-feather="circle" class="fa-solid fa-circle position-absolute"></i>
                                </div>
                            </a>

                            <a class="dropdown-item position-relative" href="#">
                                <div class="message d-flex justify-content-start">
                                    <div class="message-image">
                                        <img src="./assets/img/profile-15.jpeg" alt="">
                                    </div>

                                    <div class="message-info">
                                        <span>User</span>
                                        <p class="fw-medium">1 hour ago</p>
                                    </div>

                                    <i data-feather="circle" class="fa-solid fa-circle position-absolute"></i>
                                </div>
                            </a>

                            <a class="dropdown-item position-relative" href="#">
                                <div class="message d-flex justify-content-start">
                                    <div class="message-image">
                                        <img src="./assets/img/profile-15.jpeg" alt="">
                                    </div>

                                    <div class="message-info">
                                        <span>User</span>
                                        <p class="fw-medium">1 hour ago</p>
                                    </div>

                                    <i data-feather="circle" class="fa-solid fa-circle position-absolute"></i>
                                </div>
                            </a>
                        </div>
                        <hr>
                        <div class="dropdown-title pt-1 ">
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-0 align-self-center">Notifications</h4>
                                <a href="">
                                    <span class="badge bg-success text-center">9 New</span>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="dropdown-content">
                            <a class="dropdown-item position-relative" href="#">
                                <div class="message d-flex justify-content-start">
                                    <div class="message-image">
                                        <img src="./assets/img/profile-15.jpeg" alt="">
                                    </div>

                                    <div class="message-info">
                                        <span>User</span>
                                        <p class="fw-medium">1 hour ago</p>
                                    </div>

                                    <i data-feather="circle" class="fa-solid fa-circle position-absolute"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="navbar-item position-relative drop-element">
                <a href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar-container">
                        <i class="fa-solid fa-circle position-absolute" data-feather="circle"></i>
                        @if (Auth::user()->avatar)
                        <img src="{{ Auth::user()->avatar }}">
                        @else
                        <img src="{{ asset('frontend/assets/img/user_defauth.png') }}">
                        @endif
                        
                    </div>
                </a>

                <div class="dropdown-card position-absolute drop-user dropdown-menu">
                    <div class="dropdown">
                        <div class="dropdown-title d-flex align-items-center">
                            <div class="emoji me-2">👋</div>
                            <div class="d-flex flex-column align-items-center">
                                <h4>{{ last(explode(" ", Auth::user()->name)) }}</h4>
                                <p class="text-primary mb-0 fs-5 text-capitalize">{{ Auth::user()->role->name }}</p>
                            </div>
                        </div>
                        
                        <hr>

                        <div class="dropdown-item py-0">
                            <a href="./account.html" class="d-flex justify-content-start align-items-center log-out">
                                <i data-feather="user" class="fa-solid fa-user" stroke-width="1.5"></i>
                                <span>Profile</span>
                            </a>
                        </div>

                        <div class="dropdown-item py-0">
                            <a href="./message.html" class="d-flex justify-content-start align-items-center">
                                <i data-feather="inbox" class="fa-solid fa-inbox" stroke-width="1.5"></i>
                                <span>Inbox</span>
                            </a>
                        </div>

                        <div class="dropdown-item py-0">
                            <a href="./account.html" class="d-flex justify-content-start align-items-center log-out">
                                <i data-feather="log-out" class="fa-solid fa-user" stroke-width="1.5"></i>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>