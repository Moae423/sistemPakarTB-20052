<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$title}} Page</title>
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }
    .login-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 40px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin-top: 100px;
    }
</style>
</head>
<body>

<div class="container ">
    <div class="login-container">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      @if (session()->has('LoginFailed'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginFailed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
        <h2 class="text-center mb-4">Sign In</h2>
        <form action="/login" method="POST">-
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label" >Email address</label>
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" name="email" required autofocus>
                <div class="invalid-feedback">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('email')
                is-invalid
            @enderror" id="password" name="password" required>
                <div class="invalid-feedback">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <p class="fw-medium">New to Sistem Pakar? <a href="/register" class="text-decoration-none">Register now</a></p>
            </div>
            <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="#">Forgot password?</a>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
