<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>smartclic | Login</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admn/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('admn/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admn/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('admn/css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('admn/images/favicon.png') }}">
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                    <div class="row flex-grow">
                        <div class="col-lg-6 mx-auto">
                            <div class="auth-form-light text-center p-5">
                                <div class="brand-logo">
                                    <img src="{{ asset('admn/images/smartclic.png') }}">
                                </div>
                                <h4>Building brands that move hearts, minds & business</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- plugins:js -->
        <script src="{{ asset('admn/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('admn/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admn/js/misc.js') }}"></script>
        <!-- endinject -->
    </body>
</html>