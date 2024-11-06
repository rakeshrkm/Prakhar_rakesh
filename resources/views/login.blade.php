<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/login-form.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-4">
  <div class="col-md-12 text-center mt-4">
    <img src="{{ asset('img/logo.png')}}" class="mt-4" alt="Login image" title="Login Image" />
  </div>
  <div class="row">
    <div class="col-md-6">
        <div class="login-image">
          <img src="{{ asset('assets/img/login-image.jpg')}}" alt="Login image" title="Login Image" class="w-100" />
        </div>
    </div>
    <div class="col-md-6">
      <div class="login-form">
        <h2 class="text-center">Login Here</h2>
        <form action="{{ route('loginSubmit' )}}" method="post">
          @csrf
          <div class="mb-3 mt-3">
            <label for="email" class="mb-2">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

            @error('email')
                <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="pwd" class="mb-2">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            @error('password')
              <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
          <button type="submit" class="btn text-white">Login</button>
        </form>
      </div>

    </div>
  </div>

</div>

</body>
</html>
