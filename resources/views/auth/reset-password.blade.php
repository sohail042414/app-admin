{{-- resources/views/auth/reset-password.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reset Password | Mantis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  {{-- Favicon & Fonts --}}
  <link rel="icon" href="{{ asset('build/assets/images/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
  
  {{-- Theme Styles --}}
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/tabler-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/material.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/style-preset.css') }}">
</head>

<body>
  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <a href="#"><img src="{{ asset('assets/images/logo-dark.svg') }}" alt="Logo"></a>
        </div>

        <div class="card my-5">
          <div class="card-body">

            {{-- Validation Errors --}}
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="mb-4">
              <h3 class="mb-2"><b>Reset Password</b></h3>
              <p class="text-muted">Please choose your new password</p>
            </div>

            <form method="POST" action="{{ route('password.store') }}">
              @csrf

              <!-- Token -->
              <input type="hidden" name="token" value="{{ $request->route('token') }}">

              <!-- Email -->
              <div class="form-group mb-3">
                <label class="form-label">Email</label>
                <input type="email" 
                       name="email" 
                       value="{{ old('email', $request->email) }}" 
                       class="form-control @error('email') is-invalid @enderror" 
                       required autofocus autocomplete="username">
                @error('email')
                  <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
              </div>

              <!-- Password -->
              <div class="form-group mb-3">
                <label class="form-label">Password</label>
                <input type="password" 
                       name="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       required autocomplete="new-password">
                @error('password')
                  <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
              </div>

              <!-- Confirm Password -->
              <div class="form-group mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" 
                       name="password_confirmation" 
                       class="form-control @error('password_confirmation') is-invalid @enderror" 
                       required autocomplete="new-password">
                @error('password_confirmation')
                  <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
              </div>

              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">
                  Reset Password
                </button>
              </div>
            </form>

          </div>
        </div>

        <div class="auth-footer row">
          <div class="col my-1">
            <p class="m-0">Copyright © <a href="#">Codedthemes</a></p>
          </div>
          <div class="col-auto my-1">
            <ul class="list-inline footer-link mb-0">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
              <li class="list-inline-item"><a href="#">Contact us</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- Scripts --}}
  <script src="{{ asset('build/assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('build/assets/js/pcoded.js') }}"></script>
</body>
</html>
