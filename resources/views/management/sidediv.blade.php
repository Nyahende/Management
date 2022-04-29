<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{asset('/main.css')}}"/>

<body>
    <div class="side-div">

    <div class="profile">
        <div class="profile-photo">
            <img src="" alt="" class="the-profile-photo">
        </div>
        <div class="profile-desc">
            <span>Username: <br>
             Michael</span> <br><br>
            <span>Department: <br> Chemistry</span> <br><br>
            <span>Position: <br> InfoChemist</span>
        </div>
    </div>
    <hr>
    <div class="released-div">
        <ul>
            <li><a href="{{route('products')}}"> Released Products</a></li> <hr>
            <li><a href="{{route('rejects')}}"> Rejects</a></li> <hr>
            <li><a href="{{route('charts')}}"> Charts</a></li>
        </ul>
    </div>

    </div>
</body>
</html>