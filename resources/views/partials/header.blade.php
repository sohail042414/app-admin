 <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
     <div class="me-auto pc-mob-drp">
         <ul class="list-unstyled">
             <!-- ======= Menu collapse Icon ===== -->
             <li class="pc-h-item pc-sidebar-collapse">
                 <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                     <i class="ti ti-menu-2"></i>
                 </a>
             </li>
             <li class="pc-h-item pc-sidebar-popup">
                 <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                     <i class="ti ti-menu-2"></i>
                 </a>
             </li>
             <li class="dropdown pc-h-item d-inline-flex d-md-none">
                 <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
                     role="button" aria-haspopup="false" aria-expanded="false">
                     <i class="ti ti-search"></i>
                 </a>
                 <div class="dropdown-menu pc-h-dropdown drp-search">
                     <form class="px-3">
                         <div class="form-group mb-0 d-flex align-items-center">
                             <i data-feather="search"></i>
                             <input type="search" class="form-control border-0 shadow-none"
                                 placeholder="Search here. . .">
                         </div>
                     </form>
                 </div>
             </li>
   
         </ul>
     </div>
     <!-- [Mobile Media Block end] -->
    <div class="ms-auto">
    <ul class="list-unstyled mb-0">
        <li class="dropdown pc-h-item header-user-profile">
            <a class="pc-head-link dropdown-toggle arrow-none me-0 d-flex align-items-center" 
               data-bs-toggle="dropdown" href="#"
               role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                @auth
                    <i class="ti ti-user me-2 fs-5"></i>   {{-- Profile icon --}}
                    <span>{{ auth()->user()->full_name }}</span>
                @endauth
            </a>

            <div class="dropdown-menu dropdown-menu-end shadow rounded-3 p-2">
                <a href="{{ route('clear-cache') }}" class="dropdown-item d-flex align-items-center">
                    <i class="ti ti-refresh me-2"></i>
                    <span>Clear Cache</span>
                </a>

                <div class="dropdown-divider"></div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a href="#!" class="dropdown-item d-flex align-items-center"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ti ti-power me-2 text-danger"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</div>

 </div>
