<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/apexcharts.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/prism.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/rangeslider.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
    <script src="{{ asset('') }}vendor/sweetalert/sweetalert.all.js"></script>
    <title>PMB - UNIBA MADURA</title>
</head>

<body>

    {{-- <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">U</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">B</span>
                <span class="d-inline-block">A</span>
            </div>
        </div>
    </div> --}}


    <div class="container-fluid">
        <div class="main-content d-flex flex-column px-0">
            <div class="m-auto mw-510 py-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="p-5 card bg-white border-0 rounded-10 mb-4">
                        <div class="d-flex flex-column align-items-center gap-3 mb-3 justify-content-center">
                            <img src="{{ asset('') }}assets/logo_uniba.png" width="80" alt="logo">

                            <h4 class="fs-3  mb-0">PMB UNIBA MADURA</h4>
                        </div>

                        <div class="card-body p-4">

                            <div class="form-group mb-4">
                                <label class="label">Email</label>
                                <input type="email" value="{{ old('email') }}" name="email"
                                    class="form-control h-58" placeholder="Your email address">
                            </div>
                            <div class="form-group mb-0">
                                <label class="label">Password</label>
                                <div class="form-group">
                                    <div class="password-wrapper position-relative">
                                        <input type="password" name="password" id="password"
                                            class="form-control h-58 text-dark" placeholder="Your password">
                                        <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;"
                                            class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 gap-3 d-sm-flex justify-content-between mb-2">
                                <div class="form-check">
                                    <input class="form-check-input position-relative" style="top: 1.1px;"
                                        type="checkbox" value id="flexCheckDefault">
                                    <label class="form-check-label  text-gray-light" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forget-password.html"
                                    class=" text-primary text-decoration-none mt-5 mt-sm-0 d-block">
                                    Forgot your password?
                                </a>
                            </div>
                            <p class="d-flex gap-1 float-end mt-3">Tida punya akun?
                                <a href="#" class="text-decoration-none text-primary">Daftar</a>
                            </p>


                            <button type="submit"
                                class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- 

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('') }}assets/js/dragdrop.js"></script>
    <script src="{{ asset('') }}assets/js/rangeslider.min.js"></script>
    <script src="{{ asset('') }}assets/js/sweetalert.js"></script>
    <script src="{{ asset('') }}assets/js/quill.min.js"></script>
    <script src="{{ asset('') }}assets/js/data-table.js"></script>
    <script src="{{ asset('') }}assets/js/prism.js"></script>
    <script src="{{ asset('') }}assets/js/clipboard.min.js"></script>
    <script src="{{ asset('') }}assets/js/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/js/amcharts.js"></script>
    <script src="{{ asset('') }}assets/js/custom/ecommerce-chart.js"></script>
    <script src="{{ asset('') }}assets/js/custom/custom.js"></script> --}}

</body>


</html>
