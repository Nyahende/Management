<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
     <link rel="stylesheet" href="{{asset('/main.css')}}"/>

<body>
    @include('management.loginheader')
    <div class="login-body">

    <div class="login-form-outside-div">

        <form action="" method="post">
            @csrf
            <div class="login-form-inner-div">
              <span class="login-header">Login Form</span><br>


              <input type="text" placeholder="Email" name="email" class="auth-input"> <br>
              <input type="text" placeholder="Password" name="email" class="auth-input"><br>
              <button type="submit" class="login-btn">Login</button>
              <div class="auth-links">
                  <div class="forgot-link">
                  <a href="" >Forgot Password?</a>
                  </div> <br>
                  <div class="dont-have-link">
                  <a href="" >Don't have an aacount?</a>
                  </div>
              </div>
            </div>
        </form>
    </div>

    </div>
    @include('management.footer')
</body>
</html>