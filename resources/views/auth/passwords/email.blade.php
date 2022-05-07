<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berger Management | Forgot Password</title>
</head>
     <link rel="stylesheet" href="{{asset('/main.css')}}"/>

<body>
    @include('management.loginheader')
    <div class="login-body">

    <div class="login-form-outside-div">


        <form action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="login-form-inner-div">
            @if (session('status'))
                <div class="email-sent-message">
                    {{ session('status') }}
                </div>
             @endif
              <span class="login-header">Login Form</span><br>


              <input type="text" placeholder="Email" name="email" class="auth-input" value="{{ old('email') }}" required autocomplete="email" autofocus> <br>
              <span class="signup-form-error">@error('email'){{$message}}@enderror</span> <br>

              <button type="submit" class="login-btn">Send Password Reset Link</button>
             
            </div>
        </form>
    </div>

    </div>
    @include('management.footer')
</body>
</html>