<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
     <link rel="stylesheet" href="{{asset('/main.css')}}"/>

<body>
    @include('management.loginheader')
    <div class="login-body">

    <div class="login-form-outside-div">

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="register-form-inner-div">
              <span class="login-header">Register Form</span><br>


              <input type="text" placeholder="First Name" name="firstname" class="register-input"> <br>
              <span class="signup-form-error">@error('firstname'){{$message}}@enderror</span> <br>
              <input type="text" placeholder="Last Name" name="lastname" class="register-input"> <br>
              <span class="signup-form-error">@error('lastname'){{$message}}@enderror</span> <br>

              <input type="text" placeholder="Department" name="department" class="register-input"> <br>
              <span class="signup-form-error">@error('department'){{$message}}@enderror</span> <br>

              <input type="text" placeholder="Position" name="position" class="register-input"> <br>
              <span class="signup-form-error">@error('position'){{$message}}@enderror</span> <br>

              <input type="text" placeholder="Email" name="email" class="register-input"> <br>
              <span class="signup-form-error">@error('email'){{$message}}@enderror</span> <br>

              <input type="password" placeholder="Password" name="password" class="register-input"><br>
              <span class="signup-form-error">@error('password'){{$message}}@enderror</span> <br>

              <input type="password" placeholder="Confirm Password" name="password_confirmation" class="register-input"><br>
              <button type="submit" class="register-btn">Register</button>

              <div class="auth-links">                
                  <div class="dont-have-link">
                  <a href="login" >Already have an Account?</a>
                  </div>
              </div>
            </div>
        </form>
    </div>

    </div>
    @include('management.footer')
</body>
</html>