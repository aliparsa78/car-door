

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->

    <title>Cardoor - Register</title>

    <style>
        .submit{
            cursor:pointer;
        }
        .submit:hover{
            background-color: rgb(260,90,260);
        }
    </style>
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

    @extends('Frontend.layouts.main')
    @section('content')

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
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Sign Up</h3>
							<form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div>
                                    <label for="" class="float-left">Name</label>
                                    <input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Enter your name" required autofocus autocomplete="name" />
                                </div>
                                <div>
                                    <label for="" class="float-left">Last Name</label>
                                    <input id="lastname" class="block mt-1 w-full" type="text" name="lastname" placeholder="Enter your last name" required autofocus autocomplete="name" />
                                </div>

                                <div class="">
                                    <label for="" class="float-left">Email</label>
                                    <input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Enter your email" required autocomplete="username" />
                                </div>

                                <div class="">
                                    <label for="" class="float-left">Password</label>
                                    <input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Enter your password" required autocomplete="new-password" />
                                </div>

                                <div class="">
                                    <label for="" class="float-left">Confirm Password</label>
                                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ms-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif

                                <button type="submit" class="submit"><i class="fa fa-check-square "></i> Sign Up</button>

                                <div class="flex items-center justify-end ">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>


                                </div>
                            </form>
                     <div class="log-btn">
								
                		</div>
                		
                		<div class="login-other">
                			<span class="or">or</span>
                			<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
                			<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
                		</div>
                		<div class="create-ac">
                			<p>Have an account? <a href="login.html">Sign In</a></p>
                		</div>
                		<div class="login-menu">
                			<a href="about.html">About</a>
                			<span>|</span>
                			<a href="contact.html">Contact</a>
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
