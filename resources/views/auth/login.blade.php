

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    @extends('Frontend.layouts.main')
    @section('content')
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Welcome Back!</h3>
							<form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-label for="email" value="{{ __('Email') }}" class="float-left" style="float:left;" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                </div>

                                <div class="mt-1">
                                    <x-label for="password" value="{{ __('Password') }}" class="float-left" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="block">
                                    <label for="remember_me" class="float-left " style="display:flex;">
                                        <span class="ms-2 text-sm text-gray-300" >{{ __('Remember me') }}</span>
                                        <x-checkbox id="remember_me" name="remember" />
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-1">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-300 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-button class="ms-4">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>
                            </form>
                		</div>
                		
                		<div class="login-other">
                			<span class="or">or</span>
                			<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With Facebook</a>
                			<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
                		</div>
                		<div class="create-ac">
                			<p>Don't have an account? <a href="register">Sign Up</a></p>
                		</div>
                		<div class="login-menu">
                			<a href="about">About</a>
                			<span>|</span>
                			<a href="contact_page">Contact</a>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

   @endsection
 


</body>

</html>
