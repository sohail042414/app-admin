<div class="navbar-wrapper">
    <div class="m-header">
        <a href="{{ route('dashboard') }}" class="b-brand text-primary">
            <!-- ========   Change your logo from here   ============ -->
            <img src="{{ asset('build/assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
        </a>
    </div>

    <div class="navbar-content d-flex flex-column justify-content-between">
        <!-- 🔹 Main Nav Items -->
        <ul class="pc-navbar">
            <li class="pc-item">
                <a href="{{ route('dashboard') }}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                    <span class="pc-mtext">Dashboard</span>
                </a>
            </li>

            <li class="pc-item">
                <a href="{{ route('users.index') }}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-users"></i></span>
                    <span class="pc-mtext">Users</span>
                </a>
            </li>
        </ul>

      
    </div>
</div>
