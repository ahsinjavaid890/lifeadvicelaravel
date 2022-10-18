
<header class="header-area header-area-five fixed-top">
    <!-- Start Navbar Area -->
    <div class="nav-area nev-style-five">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ url('') }}" class="logo">
                    <img src="{{ url('public/images') }}/{{ Cmf::get_store_value('header_logo') }}" alt="Logo">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('') }}">
                            <img src="{{ url('public/images') }}/{{ Cmf::get_store_value('header_logo') }}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ url('') }}" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('travel-insurance') }}" class="nav-link dropdown-toggle">
                                         Travel Insurance
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('travel-insurance') }}" class="nav-link">Travel Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('super-visa-insurance') }}" class="nav-link">Super Visa Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('visitor-insurance') }}" class="nav-link">Visitor Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('student-insurance') }}" class="nav-link">Student Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">
                                                Insurance For Candians
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Single Trip</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Multitrip</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">All Inclusive</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('life-insurance') }}" class="nav-link dropdown-toggle">
                                            Insurance 
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('life-insurance') }}" class="nav-link">Whole Life Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('desability') }}" class="nav-link">Desability</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('critical-illness') }}" class="nav-link">Critical Illness Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('health-insurance') }}" class="nav-link">Health-Insurance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('aboutus') }}" class="nav-link dropdown-toggle">
                                            About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('product') }}" class="nav-link dropdown-toggle">
                                            Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('blogs') }}" class="nav-link">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('login')}}" class="btn btn-lg login-btn">
                                    Login 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('signup')}}" class="btn btn-lg sign-up">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                            <!-- Start Other Option -->
                            <div class="login-signup d-flex">
                            </div>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>