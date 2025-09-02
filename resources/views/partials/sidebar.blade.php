<div class="navbar-wrapper">
    <div class="m-header">
        <a href="../dashboard/index.html" class="b-brand text-primary">
            <!-- ========   Change your logo from here   ============ -->
            <img src="{{ asset('build/assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
        </a>
    </div>
    <div class="navbar-content">
        <ul class="pc-navbar">
            <li class="pc-item">
                <a href="{{ route('dashboard') }}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                    <span class="pc-mtext">Dashboard</span>
                </a>
            </li>


            <li class="pc-item">
                <a href="{{ route('users.index') }}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-typography"></i></span>
                    <span class="pc-mtext">Users</span>
                </a>
            </li>
            {{-- <li class="pc-item">
                <a href="../elements/bc_color.html" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
                    <span class="pc-mtext">Color</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="../elements/icon-tabler.html" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-plant-2"></i></span>
                    <span class="pc-mtext">Icons</span>
                </a>
            </li>

            <li class="pc-item pc-caption">
                <label>Pages</label>
                <i class="ti ti-news"></i>
            </li> --}}
            <li class="pc-item">
                <a href="{{ route('logout') }}" class="pc-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="pc-micon"><i class="ti ti-lock"></i></span>
                    <span class="pc-mtext">Log Out</span>
                </a>
            </li>
        
        </ul>
        {{-- <div class="card text-center">
        <div class="card-body">
          <img src="../assets/images/img-navbar-card.png" alt="images" class="img-fluid mb-2">
          <h5>Upgrade To Pro</h5>
          <p>To get more features and components</p>
          <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank"
          class="btn btn-success">Buy Now</a>
        </div>
      </div> --}}
    </div>
</div>
