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
                                <li class="active"><a href="#">Home</a>
                                
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="#">Cars</a>
                                    <ul>
                                        <li><a href="car-left-sidebar.html">Car Left Sidebar</a></li>
                                        <li><a href="car-right-sidebar.html">Car Right Sidebar</a></li>
                                        <li><a href="car-without-sidebar.html">Car Without Sidebar</a></li>
                                        <li><a href="car-details.html">Car Details</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="contact.html">Contact</a></li>
                                @if(Auth::user())
                                <li><a href="login">Dashboard</a></li>
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