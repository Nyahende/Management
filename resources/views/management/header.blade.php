<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{asset('/main.css')}}"/>

<body>
    <div class="header">
        <div class="logo">
            <img src="{{asset('images/berger-logo.jpg')}}" alt="">
        </div>
        <div class="header-words">
            <div class="management-header-div">
              <span class="management-header">BERGER MANAGEMENT SYSTEM</span> 
            </div>
            <div class="policy-header-div">
              <span lass="policy-header">Quality Policy</span>
            </div>
            <div class="logout">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
        </div>
    </div>
</body>
</html>