<!DOCTYPE html>
<html>
<head>
  <title>JNEMFS - Login</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <img class="wave" src="{{ asset('images/wave.png') }}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('images/mobile.svg') }}">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
              @csrf
                <img src="{{ asset('images/profile.svg') }}">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                   <div class="i">
                      <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                    <h5>Username</h5>
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                   </div>
                </div>
                <div class="input-div pass">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
                    <h5>Password</h5>
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                   </div>
                </div>
                <a href="{{ route('password.request') }}">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
