<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berger management | Reset Password</title>
</head>
     <link rel="stylesheet" href="{{asset('/main.css')}}"/>

<body>
    @include('management.loginheader')
    <div class="login-body">

    <div class="login-form-outside-div">

        <form action="{{ route('password.update') }}" method="post">
            @csrf
            <div class="login-form-inner-div">
              <span class="login-header">Login Form</span><br>

             <input type="hidden" name="token" value="{{ $token }}">



              <input type="text" placeholder="Email" name="email" class="auth-input" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus> <br>
              <span class="signup-form-error">@error('email'){{$message}}@enderror</span> <br>

              <input type="password" placeholder="Password" name="password" class="auth-input" required autocomplete="new-password"><br>
              <span class="signup-form-error">@error('password'){{$message}}@enderror</span> <br>

              <input type="password" placeholder="Confirm Password" name="password_confirmation" class="auth-input" required autocomplete="new-password"><br>

              <button type="submit" class="login-btn">Reset Password</button>
              
            </div>
        </form>
    </div>

    </div>
    @include('management.footer')
</body>
</html>