
<div class="body-overlay" id="body-overlay"></div>

<!-- navbar start -->
<div class="navbar-top" style="background-color:#151423 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 align-self-left">
                <span class="mb-0 text-white">Welcome to Prakhar Software Solutions Pvt. Ltd.</span>
            </div>
            <div class="col-lg-4 col-md-5 align-self-center">
                <span class="text-white"><i class="fa fa-envelope" aria-hidden="true"></i> Email Id : info@prakharsoftwares.com</span>
            </div>
            <div class="col-lg-3 col-md-5 align-self-right">
                <div class="social-media-light">
                    <a class="facebook" href="https://www.facebook.com/Prakharsoftware" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="twitter" href="https://twitter.com/Prakharsoftware" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                        </svg></a>
                    <a class="twitter" href="https://www.linkedin.com/company/prakhar-software/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="instagram" href="https://www.instagram.com/prakhar.softwares/" target="_blank"> <i class="fab fa-instagram"></i></a>
                    <a class="youtube" href="https://www.youtube.com/@PrakharSoftwares" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-area navbar-area-2 navbar-expand-lg pt-2 pb-2">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo d-inline-block d-lg-none">
            <a href="{{url("/")}}">
                <img src="{{ asset('img/logo.png') }}" alt="img">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="Iitechie_main_menu">
            <ul class="navbar-nav menu-open text-lg-start">
                <li class="bg-white p-2 logo_remove">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('img/logo.png') }}" alt="img">
                    </a>
                </li>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropend main-menu">
                            <a class="nav-link dropdown-toggle" href="{{url('drone-technology')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Drone Technology</a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ url('sit-drone') }}">SITC in Drone</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('anti-drone') }}">Anti Drone Technology</a></li>
                            </ul>
                        </li>
                        <hr class="dropdown-divider">
                        <li class="nav-item dropend main-menu">
                            <a class="nav-link dropdown-toggle" href="{{url('training-development')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Training and Development</a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ url('skill-development-training') }}">Skill Development Training</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('corporate-trainings') }}">Corporate Trainings</a></li>
                            </ul>
                        </li>
                        <hr class="dropdown-divider">
                        <li class="nav-item dropend main-menu">
                            <a class="nav-link dropdown-toggle" href="{{url('manpower-support')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manpower Support</a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ url('skill-it-recruitment') }}">IT Recruitment</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('non-it-recruitment') }}">Non IT Recruitment</a></li>
                            </ul>
                        </li>
                        <hr class="dropdown-divider">
                        <li class="nav-item dropend main-menu">
                            <a class="nav-link dropdown-toggle" href="{{url('procurement-support')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Procurement Support
                            </a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ url('it-hardwares-accessories') }}">IT Hardwares & Accessories</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('licensed-softwares-solutions') }}">Licensed Softwares & Solutions</a></li>
                            </ul>
                        </li>
                        <hr class="dropdown-divider">
                        <li class="nav-item dropend main-menu">
                            <a class="nav-link dropdown-toggle" href="{{url('it-services')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                IT Services
                            </a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ url('application-web-development') }}">Application Development</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('website-development') }}">Website Development</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('software-development') }}">Software Development</a></li>

                                <hr class="dropdown-divider">
                                <li><a href="{{ url('system-integration-data-service') }}">System Integration Data Service</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('system-integration') }}">System Integration</a></li>
                            </ul>
                        </li>
                        <hr class="dropdown-divider">
                        <li class="nav-item dropend main-menu">
                            <a class="nav-link dropdown-toggle" href="{{url('e-government-projects')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Governance Projects</a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ url('training-implementation') }}">Training & Implementation</a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('security-survillance-project-cctv') }}">Security & Survillance Project </a></li>
                                <hr class="dropdown-divider">
                                <li><a href="{{ url('scanning-digitization-document-management-system') }}">Scanning and Digitization</a></li>
                            </ul>
                        </li>
                        <hr class="dropdown-divider">
                        <li><a href="{{ url('gis-remote-sensing-projects') }}" class="base-sub-menu">Geographic Information System</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{ url('hr-consulting-services') }}" class="base-sub-menu">HR Consulting Services</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{url('call-centre-solution')}}" class="base-sub-menu">Call Centre Solution</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{ url('manpower-staffing')}}" class="base-sub-menu">Manpower Staffing</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{url('online-registration')}}" class="base-sub-menu">Online Registration System</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{url('training-excellence-partner')}}" class="base-sub-menu">Training Excellence Partner</a></li>
                        <hr class="dropdown-divider">
                    </ul>
                </li>

                <li><a href="{{ url('blog') }}">Blog</a></li>
                <li><a href="{{ url('career') }}">Career </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Invenstor Relations
                    </a>
                    <ul class="dropdown-menu" style="width:400px;">
                        <li class="nav-item dropend main-menu">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('corporate-governance')}}" role="button"> Carporate Governance</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('investor-information')}}" role="button"> Investor Information</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('drone-technology')}}" role="button">IPO Documents</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('investor-grievance')}}" role="button">Investor Grievance</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('policies')}}" role="button"> Policies</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('group-companies')}}" role="button">Group Companies</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('material-contracts-documents')}}" role="button">Material Contracts & Documents</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a class="nav-link" href="{{url('subsidiaries')}}" role="button">Subsidiaries</a></li>
                                        <hr class="dropdown-divider">
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->
