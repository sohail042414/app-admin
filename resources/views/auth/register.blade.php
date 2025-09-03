<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Sign up | Mantis Bootstrap 5 Admin Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('build/assets/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('build/assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('build/assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('build/assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('build/assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style-preset.css') }}">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

{{-- <body>
  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header text-center">
          <a href="#"><img src="{{ asset('build/assets/images/logo-dark.svg') }}" alt="logo"></a>
        </div>

        <div class="card my-5">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Sign up</b></h3>
              <a href="{{ route('login') }}" class="link-primary">Already have an account?</a>
            </div>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <!-- Name -->
              <div class="form-group mb-3">
                <label class="form-label">Name*</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus
                       class="form-control @error('name') is-invalid @enderror"
                       placeholder="Full Name">
                @error('name')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Email -->
              <div class="form-group mb-3">
                <label class="form-label">Email Address*</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email Address">
                @error('email')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Password -->
              <div class="form-group mb-3">
                <label class="form-label">Password*</label>
                <input type="password" name="password" required
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password">
                @error('password')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Confirm Password -->
              <div class="form-group mb-3">
                <label class="form-label">Confirm Password*</label>
                <input type="password" name="password_confirmation" required
                       class="form-control"
                       placeholder="Confirm Password">
              </div>

              <!-- Submit -->
              <div class="d-grid mt-3">
                <button type="submit" class="btn btn-primary">Create Account</button>
              </div>
            </form>
            <!-- End Register Form -->

            <p class="mt-4 text-sm text-muted">
              By signing up, you agree to our
              <a href="#" class="text-primary">Terms of Service</a> and
              <a href="#" class="text-primary">Privacy Policy</a>
            </p>
          </div>
        </div>

        <div class="auth-footer row">
          <div class="col my-1 text-center">
            <p class="m-0">Copyright ©
              <a href="https://brantum-technologies.com/">Brantum Technologies</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body> --}}
<body>
  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header text-center">
          <a href="#"><img src="{{ asset('build/assets/images/logo-dark.svg') }}" alt="logo"></a>
        </div>

        <div class="card my-5">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Sign up</b></h3>
              <a href="{{ route('login') }}" class="link-primary">Already have an account?</a>
            </div>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <!-- Username Field -->
              <div class="form-group mb-3">
                <label class="form-label">Username*</label>
                <input type="text" name="username" value="{{ old('username') }}" required autofocus
                       class="form-control @error('username') is-invalid @enderror"
                       placeholder="Username">
                @error('username')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Full Name Field -->
              <div class="form-group mb-3">
                <label class="form-label">Full Name*</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" required
                       class="form-control @error('full_name') is-invalid @enderror"
                       placeholder="Full Name">
                @error('full_name')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Email Field -->
              <div class="form-group mb-3">
                <label class="form-label">Email Address*</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email Address">
                @error('email')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Password Field -->
              <div class="form-group mb-3">
                <label class="form-label">Password*</label>
                <input type="password" name="password" required
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password">
                @error('password')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <!-- Confirm Password Field -->
              <div class="form-group mb-3">
                <label class="form-label">Confirm Password*</label>
                <input type="password" name="password_confirmation" required
                       class="form-control"
                       placeholder="Confirm Password">
              </div>

              <!-- Submit -->
              <div class="d-grid mt-3">
                <button type="submit" class="btn btn-primary">Create Account</button>
              </div>
            </form>
            <!-- End Register Form -->

            <p class="mt-4 text-sm text-muted">
              By signing up, you agree to our
              <a href="#" class="text-primary">Terms of Service</a> and
              <a href="#" class="text-primary">Privacy Policy</a>
            </p>
          </div>
        </div>

        <div class="auth-footer row">
          <div class="col my-1 text-center">
            <p class="m-0">Copyright ©
              <a href="https://brantum-technologies.com/">Brantum Technologies</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
