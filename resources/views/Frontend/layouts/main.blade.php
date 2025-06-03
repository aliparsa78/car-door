<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    @include('Frontend.layouts.header')
    @yield('content')
    @if(session('success'))
        <script>
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{session('success')}}',
            confirmButtonText: 'Good'
          })
        </script>
        @endif
        @if(session('danger'))
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Danger!',
            text: '{{session('danger')}}',
            confirmButtonText: 'Got it'
          })
        </script>
        @endif
    <!--== Footer Area Start ==-->
    @include('Frontend.layouts.footer')
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

</body>

</html>