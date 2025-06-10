<?php
 use Illuminate\Support\Facades\Auth; 
 use App\Models\CarCategory;

 $CarCategories = CarCategory::get();
  
 ?>

<header id="header-area" class="fixed-top">
       

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="{{request()->is('/') ? 'active' : ''}} "><a href="/">Home</a>
                                
                                <li class="{{request()->is('about') ? 'active' : ''}}"><a href="about">About</a></li>
                                <li class="{{request()->is('service') ? 'active' : ''}}" ><a href="services">services</a></li>
                                <li class="{{request()->is('cars' ? 'active' : '')}}" ><a href="#">Cars</a>
                                    <ul>
                                        @foreach($CarCategories as $car)
                                        <li><a href="/car_category/{{$car->id}}">{{$car->name}}</a></li>
                                       @endforeach
                                    </ul>
                                </li>
                               
                                <li class="{{request()->is('contact') ? 'active' : ''}}" ><a href="contact">Contact</a></li>
                                @if(Auth::user())
                                <li><a href="#">{{Auth::user()->name}}</a>
                                    <ul>
                                        <li><a href="car-left-sidebar.html">Profile</a></li>
                                        @if(Auth::user()->user_type==='admin')
                                        <li><a href="dashboard">Dashboard</a></li>
                                        @endif
                                        <li><a id="logout-btn" href="#">Sign Out</a>
                                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none">
                                                @csrf
                                            </form>
                                    </li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="login">Sign in</a></li>
                                <li><a href="register">Sign up</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>

    <script>
        document.getElementById('logout-btn').addEventListener('click',function(e){
            e.preventDefault();
            document.getElementById('logout-form').submit();
        });
    </script>