{{-- resources/views/auth/forgot-password.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password | Mantis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/style-preset.css') }}">
</head>
<body>
  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <a href="#"><img src="{{ asset('build/assets/images/logo-dark.svg') }}" alt="Logo"></a>
        </div>
        <div class="card my-5">
          <div class="card-body">

            {{-- Session Status --}}
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Forgot Password</b></h3>
              <a href="{{ route('login') }}" class="link-primary">Back to Login</a>
            </div>

            <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="form-group mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" 
                       class="form-control @error('email') is-invalid @enderror"
                       required autofocus placeholder="Email Address">
                @error('email')
                  <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
              </div>

              <p class="mt-4 text-sm text-muted">Do not forget to check SPAM box.</p>

              <div class="d-grid mt-3">
                <button type="submit" class="btn btn-primary">
                  Send Password Reset Email
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
