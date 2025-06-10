<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

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
                        <h2>Contact Us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="name-input">
                                        <input type="text" name="fullname" placeholder="Full Name">
                                          @error('fullname')  <span class="text-danger">{{$message}}</span> @enderror

                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="email-input">
                                        <input type="email" name="email"  placeholder="Email Address">
                                        @error('email')  <span class="text-danger">{{$message}}</span> @enderror

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="email-input">
                                        <input type="text" name="subject" placeholder="Subject">
                                        @error('subject')  <span class="text-danger">{{$message}}</span> @enderror

                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                               

                                <div class="col-lg-12">

                                    <div class="message-input">
                                        <textarea name="message" cols="10" rows="5" placeholder="Message"></textarea>
                                        @error('message')  <span class="text-danger">{{$message}}</span> @enderror

                                    </div>
                                </div>
                            </div>
                            


                            <div class="input-submit">
                                <button type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->


    @endsection
    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->


</body>

</html>