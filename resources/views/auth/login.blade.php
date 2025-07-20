<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Rubick - Bootstrap HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="container px-sm-10">
            <div class="grid columns-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="g-col-2 g-col-xl-1 d-none d-xl-flex flex-column min-vh-screen">
                    <a href="login-light-login.html" class="-intro-x d-flex align-items-center pt-5">
                        <span class="text-white">{{ env('APP_NAME') }}</span>
                    </a>
                    <div class="my-auto">

                        <div class="-intro-x text-white fw-medium fs-4xl lh-base mt-10">
                            <h4>{{ env('APP_NAME') }}</h4>
                            A few more clicks to
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 fs-lg text-white text-opacity-70 dark-text-gray-500">Manage all your
                            e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->

                <div class="g-col-2 g-col-xl-1 h-screen h-xl-auto d-flex py-5 py-xl-0 my-10 my-xl-0">
                    <div
                        class="my-auto mx-auto ms-xl-20 bg-white dark-bg-dark-1 bg-xl-transparent px-5 px-sm-8 py-8 p-xl-0 rounded-2 shadow-md shadow-xl-none w-full w-sm-3/4 w-lg-2/4 w-xl-auto">
                        <h2 class="intro-x fw-bold fs-2xl fs-xl-3xl text-center text-xl-start">
                            Sign In
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 d-xl-none text-center">A few more clicks to sign in to
                            your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-8">
                            <input name="email" type="text"
                                class="intro-x login__input form-control py-3 px-4 border-gray-300 d-block"
                                placeholder="Email">
                            <input type="password" name="password"
                                class="intro-x login__input form-control py-3 px-4 border-gray-300 d-block mt-4"
                                placeholder="Password">
                        </div>
                        <div class="intro-x d-flex text-gray-700 dark-text-gray-600 fs-xs fs-sm-sm mt-4">
                            <div class="d-flex align-items-center me-auto">
                                <input name="remember_me" id="remember-me" type="checkbox" class="form-check-input border me-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="login-light-login.html">Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-5 mt-xl-8 text-center text-xl-start">
                            <button type="submit"
                                class="btn btn-primary py-3 px-4 w-full w-xl-32 me-xl-3 align-top">Login</button>
                            <button
                                class="btn btn-outline-secondary py-3 px-4 w-full w-xl-32 mt-3 mt-xl-0 align-top">Sign
                                up</button>
                        </div>
                        <div class="intro-x mt-10 mt-xl-24 text-gray-700 dark-text-gray-600 text-center text-xl-start">
                            By signin up, you agree to our
                            <br>
                            <a class="text-theme-1 dark-text-theme-10" href="login-light-login.html">Terms and
                                Conditions</a> & <a class="text-theme-1 dark-text-theme-10"
                                href="login-light-login.html">Privacy Policy</a>
                        </div>
                    </div>
                </div>

                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="login-dark-login.html"
            class="dark-mode-switcher cursor-pointer shadow-md position-fixed bottom-0 end-0 box dark-bg-dark-2 border rounded-pill w-40 h-12 d-flex align-items-center justify-content-center z-50 mb-10 me-10">
            <div class="me-4 text-gray-700 dark-text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->

    </form>
</body>

</html>