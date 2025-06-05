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
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Services Start -->
                     @foreach($services as $service)
                <?php if($service->id%2==0){
                        ?>
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-1" style="background-image: url('{{asset('storage/Service/'.$service->icon)}}');  background-size: cover; width:400px; height: 400px; float: left;"></div>
                        <div class="service-item-content">
                            <h3>{{$service->service}}</h3>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                    <!-- Single Services End -->
                    <?php }else{
                        ?>
                    

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-2 d-lg d-md-block" style="background-image: url('{{asset('storage/Service/'.$service->icon)}}'); background-size: cover; width:400px; height: 400px; float: right; margin-bottom: 0"></div>
                        <div class="service-item-content">
                         
                            
                            <h3>{{$service->service}}</h3>
                            <p>{{$service->description}}</p>
                                
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none"></div>
                    </div>
                    <?php } ?>
                    @endforeach

                    <!-- Single Services End -->

                   
                    <!-- Single Services End -->
                </div>
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->



    @endsection



</body>

</html>
