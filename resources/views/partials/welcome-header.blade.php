 <!-- main header -->
 <header class="main-header header-style-seven">
    <div class="upper-logo">
        <figure class="logo"><a href="/"><img src="{{asset('images/log.png')}}" alt="" style="width:155px; height:98px;"></a></figure>
    </div>
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <div class="text">
                    <p>Welcome to 21Roots. <a href="">Get Appointment Today</a></p>
                </div>
                <div class="phone">
                    <div class="icon-box"><img src="{{asset('images/icons/icon-40.png')}}" alt=""></div>
                    <a href="tel:18004567890">+ 1800 456 7890</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="outer-box">
                <div class="main-box">
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{route('welcome')}}">Home</a></li>  
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="service.html">All Service - 01</a></li>
                                            <li><a href="service-2.html">All Service - 02</a></li>
                                            <li><a href="service-details.html">Single Service Page</a></li>
                                        </ul>
                                    </li> 
                                    {{-- <li><a href="#">Application</a></li>  --}}
                                    <li><a href="#">Projects</a></li>  
                                    <li><a href="#">Products</a></li>  
                                    <li><a href="contact.html">Contact Us</a></li> 
                                </ul>
                            </div>
                        </nav>
                        <ul class="menu-right-content clearfix">
                            <li class="search-box-outer search-toggler">
                                <img src="{{asset('images/icons/icon-32.png')}}" alt="">
                            </li>
                            <li class="nav-btn nav-toggler navSidebar-button clearfix">
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="social-links clearfix">
                    <li><a href="index-7.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index-7.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index-7.html"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="index-7.html"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href=""><img src="{{asset('images/log.png')}}" alt="" style="width: 155px; height:98px;"></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <ul class="menu-right-content clearfix">
                        <li class="search-box-outer search-toggler">
                            <img src="{{asset('images/icons/icon-3.png')}}" alt="">
                        </li>
                        <li class="nav-btn nav-toggler navSidebar-button clearfix">
                            <span class="bar bar-1"></span>
                            <span class="bar bar-2"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href=""><img src="{{asset('images/logo-2.png')}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->