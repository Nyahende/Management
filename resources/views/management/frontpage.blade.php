<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berger Management | Welcome Page</title>
</head>
<link rel="stylesheet" href="{{asset('/main.css')}}"/>
<script src="{{asset('/js/frontslide.js')}}" type="text/javascript"></script>


<body>
    @include('management.frontheader')
    <div class="front-page-body">
        <div class="front-slide-div">
            <img src="" alt="" name="frontslide">
        </div>
         
        <div class="front-welcome-words">
            <div class="welcome-span">
                Welcome to Berger Management System
            </div>
            <div class="front-register-text">
                Login or Register For More.
            </div>
            <div class="front-btns-div">
                <button><a href="login"> Login</a></button>
                <button><a href="register"> Register</a></button>
            </div>
        </div>

    </div>
    @include('management.footer')

</body>
</html>