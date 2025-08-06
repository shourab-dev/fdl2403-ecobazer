<div class="top-bar">
                <!-- BEGIN: Breadcrumb -->

                <div class="-intro-x breadcrumb me-auto d-none d-sm-flex"> <a href="index.html">Application</a> <i
                        data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="#"
                        class="breadcrumb--active">{{ breadcrump() }}</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x position-relative me-3 me-sm-6">
                    <div class="search d-none d-sm-block">
                        <input type="text" class="search__input form-control border-transparent"
                            placeholder="Search...">
                        <i data-feather="search" class="search__icon dark-text-gray-300"></i>
                    </div>
                    <a class="notification d-sm-none" href="index.html"> <i data-feather="search"
                            class="notification__icon dark-text-gray-300"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="index.html" class="d-flex align-items-center">
                                    <div
                                        class="w-8 h-8 bg-theme-18 text-theme-9 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="w-4 h-4" data-feather="inbox"></i>
                                    </div>
                                    <div class="ms-3">Mail Settings</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div
                                        class="w-8 h-8 bg-theme-17 text-theme-11 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="w-4 h-4" data-feather="users"></i>
                                    </div>
                                    <div class="ms-3">Users & Permissions</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div
                                        class="w-8 h-8 bg-theme-14 text-theme-10 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="w-4 h-4" data-feather="credit-card"></i>
                                    </div>
                                    <div class="ms-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-14.jpg')}}">
                                    </div>
                                    <div class="ms-3">{{ auth()->user()->name }}</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        {{ auth()->user()->email }}</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-3.jpg')}}">
                                    </div>
                                    <div class="ms-3">Angelina Jolie</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        angelinajolie@left4code.com</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-5.jpg')}}">
                                    </div>
                                    <div class="ms-3">{{ auth()->user()->name }}</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        {{ auth()->user()->email }}</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-1.jpg')}}">
                                    </div>
                                    <div class="ms-3">Bruce Willis</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        brucewillis@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-4.jpg')}}">
                                </div>
                                <div class="ms-3">Sony Master Series A9G</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                            </a>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-1.jpg')}}">
                                </div>
                                <div class="ms-3">Samsung Q90 QLED TV</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                            </a>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-11.jpg')}}">
                                </div>
                                <div class="ms-3">Samsung Q90 QLED TV</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                            </a>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-5.jpg')}}">
                                </div>
                                <div class="ms-3">Nike Tanjun</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Sport &amp; Outdoor
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown me-auto me-sm-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                        aria-expanded="false" data-bs-toggle="dropdown"> <i data-feather="bell"
                            class="notification__icon dark-text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title dark-text-gray-300">Notifications</div>
                            <div class="cursor-pointer position-relative d-flex align-items-center ">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-14.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Robert
                                            De Niro</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text
                                        of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-3.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;"
                                            class="fw-medium truncate me-5 dark-text-gray-300">Angelina Jolie</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that
                                        a reader will be distracted by the readable content of a page when looking at
                                        its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-5.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Robert
                                            De Niro</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that
                                        a reader will be distracted by the readable content of a page when looking at
                                        its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-1.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Bruce
                                            Willis</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">03:20 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text
                                        of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-5.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Kevin
                                            Spacey</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that
                                        a reader will be distracted by the readable content of a page when looking at
                                        its layout. The point of using Lorem </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-pill overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-bs-toggle="dropdown">
                        <img alt="Rubick Tailwind HTML Admin Template" src="{{ getProfileImg(auth()->user()->name) }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-theme-26 dark-bg-dark-6 text-white">
                            <li class="p-2">
                                <div class="fw-medium text-white">{{ auth()->user()->name }}</div>
                                <div class="fs-xs text-theme-28 mt-0.5 dark-text-gray-600">DevOps Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="user" class="w-4 h-4 me-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="edit" class="w-4 h-4 me-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="lock" class="w-4 h-4 me-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="help-circle" class="w-4 h-4 me-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.querySelector('#logoutForm').submit();"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="toggle-right" class="w-4 h-4 me-2"></i> Logout </a>
                                <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>