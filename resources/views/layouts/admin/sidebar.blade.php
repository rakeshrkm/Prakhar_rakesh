<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="#" class="text-nowrap logo-img mx-auto">
        <img src="{{ asset('admin/assets/image/logo.png')  }}" width="180" alt="" />
        <!--<h2 class="text-center">PRAKHAR</h2>-->
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.dashboard')}}" aria-expanded="false">
            <span class="fa fa-dashboard fa-fw mr-3"></span> 
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        
        <!--<li class="sidebar-item" data-bs-toggle="collapse" href="#collapseHome" aria-expanded="false" aria-controls="collapseHome">-->
        <!--  <a class="sidebar-link" href="#" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">Home </span>-->
        <!--  </a>-->
        <!--</li>-->
        
        
        <ul class="list-group">
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action">
                <div class="w-100 justify-content-start align-items-center">
                    <span><i class="ti ti-layout-dashboard"></i></span>
                    <span class="menu-collapsed">Home</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="{{ route('edit-section1') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">Banner</span>
                </a>
                <a href="{{ route('editAbout') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">About</span>
                </a>
                <a href="{{ route('editService') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">Service</span>
                </a>
                <a href="{{ route('editProfessional') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">Professional Skill</span>
                </a>
                <a href="{{ route('sectionFive') }}" class="list-group-item list-group-item-action">
                <span class="menu-collapsed">Section Five</span>
                </a>
            </div>
        </ul>
        
        <ul class="list-group">
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action">
                <div class="w-100 justify-content-start align-items-center">
                    <span><i class="ti ti-layout-dashboard"></i></span>
                    <span class="menu-collapsed">About</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <li  class="sidebar-item">
                <a href="{{ route('admin.aboutus.index') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">About Us</span>
                </a>
                </li>
                <a href="{{ route('admin.chooseus.index') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">Why Choose Us</span>
                </a>
            </div>
        </ul>
        
        <ul class="list-group">
            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action">
                <div class="w-100 justify-content-start align-items-center">
                    <span><i class="ti ti-layout-dashboard"></i></span>
                    <span class="menu-collapsed">Services</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu3' class="collapse sidebar-submenu">
                <li  class="sidebar-item">
                <a href="{{ route('admin.sitc-drone.create') }}" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">SITC Drone</span>
                </a>
                </li>
                 <li  class="sidebar-item">
                    <a href="{{ route('admin.anti-drone.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Anti Drone</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.skill-development-training.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Skill Development & Training</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.corporate-trainings.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Corporate Training</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.skill-it-recruitment.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Skill IT Recruitment</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.non-it-recruitment.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Non IT Recruitment</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.it-hardwares-accessories.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">IT Hardwares Accessories</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.licensed-softwares-solutions.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Licensed Soft. Solutions</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.application-web-development.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> Application & Web Dev. </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.web-based-softwares.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> Web Based Softwares </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.system-integration-data-service.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> System Integration & Data Service </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.training-implementation.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> Training & Implementation </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.security-survillance.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> Security & Survillance Project -- CCTV </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.scanning-digitization.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> Scanning Digitization </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.gis-remote-sensing.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> GIS/Remote Sensing Projects </span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.hr-consulting-services.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> HR Consulting Services </span>
                    </a>
                </li>
                 <li  class="sidebar-item">
                    <a href="{{ route('admin.call-centre-solutions.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed"> Call Centre Solutions </span>
                    </a>
                </li>
                 <li  class="sidebar-item">
                    <a href="{{ route('admin.manpower-support.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Manpower Support</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.manpower-staffing.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Manpower Staffing</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.online-registration.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Online Registration</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.procurement-support.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Procurement Support</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.software-development.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Software Development</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.system-integration.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">System Integration</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.training-development.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Training Development</span>
                    </a>
                </li>
                <li  class="sidebar-item">
                    <a href="{{ route('admin.training-excellence.create') }}" class="list-group-item list-group-item-action">
                        <span class="menu-collapsed">Training Excellence Partner</span>
                    </a>
                </li>
            </div>
        </ul>
        
        <ul  class="class="collapse hide" id="collapseHome"">
        <!--<li class="sidebar-item">-->
        <!--  <a class="sidebar-link" href="{{ route('edit-section1') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">Home-Banner</span>-->
        <!--  </a>-->
        <!--</li>-->
        <!--<li class="sidebar-item">-->
        <!--  <a class="sidebar-link" href="{{ route('editAbout') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">Home-About</span>-->
        <!--  </a>-->
        <!--</li>-->
        <!--<li class="sidebar-item" >-->
        <!--  <a class="sidebar-link" href="{{ route('editService') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">Home-Service</span>-->
        <!--  </a>-->
        <!--</li>-->
        <!--<li class="sidebar-item">-->
        <!--  <a class="sidebar-link" href="{{ route('editProfessional') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">Home-Professional Skill</span>-->
        <!--  </a>-->
        <!--</li>-->
        <!--<li class="sidebar-item">-->
        <!--  <a class="sidebar-link" href="{{ route('sectionFive') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">Home-Section-Five</span>-->
        <!--  </a>-->
        <!--</li>    -->
        </ul>
        
        
        <!--<li class="sidebar-item">-->
        <!--  <a class="sidebar-link" href="{{ route('admin.aboutus.index') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">About - About Us</span>-->
        <!--  </a>-->
        <!--</li>-->
        <!-- <li class="sidebar-item">-->
        <!--  <a class="sidebar-link" href="{{ route('admin.chooseus.index') }}" aria-expanded="false">-->
        <!--    <span>-->
        <!--      <i class="ti ti-layout-dashboard"></i>-->
        <!--    </span>-->
        <!--    <span class="hide-menu">About - Why Choose Us</span>-->
        <!--  </a>-->
        <!--</li>-->
        
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.blogs.index') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Blogs</span>
          </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.gallery.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Gallery</span>
            </a>
          </li>
          {{-- <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.list-user')}}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">User List</span>
          </a>
        </li> --}}
       
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>