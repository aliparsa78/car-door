<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <base href="{{asset('public')}}">
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
                        <h2>Our Cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->


     <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choose your Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Our company will lead you to get your best services of cars.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                           

                            <div class="col-lg-12">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                    <!-- Single Popular Car Start -->
                                     @foreach($cars as $car)
                                    <div class="car  col-lg-6 col-md-6 con suv mpv" data-category="{{$car->category_id}}">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                    <img src="{{asset('storage/CarsImage/'.$car->photo)}}" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">{{$car->car_name}}</a>
                                                    <span class="price"><i class="fa fa-tag"></i> ${{$car->price_perday}}/day</span>
                                                </h3>

                                                <h5>{{$car->category->name}}</h5>

                                                <div class="p-car-feature">
                                                    <a href="#" >{{$car->car_model}}</a>
                                                    <a href="#">{{$car->car_color}}</a>
                                                    <a href="#">{{$car->city}}</a>
                                                    <a href="#" class="bg-success text-white" style="float:right">See Details</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single Popular Car End -->

                                
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>



    @endsection



</body>

</html>
