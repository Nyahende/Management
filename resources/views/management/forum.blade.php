<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | Forum</title>
</head>

     <link rel="stylesheet" href="{{asset('/main.css')}}"/>
     <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>     
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/management.js')}}" type="text/javascript"></script>


<body>
@include('management.header')
@include('management.sidediv')

<div class="announcements">
    <span class="reporting-title">
       Forum
    </span><br>
    <div class="forum-display-div">

    </div>
    <div class="forum-form">
        <form action="" method="post">
            <input type="text" placeholder="Type here" class="forum-input">
            <button type="submit" class="forum-send-btn">Send</button>
        </form>
    </div>

   
</div>

<div class="left-div">
    <ul>
        <li><a href="{{route('report')}}"> Report</a></li><hr>
        <li><a href="{{route('forum')}}"> Forum</a></li><hr>
    </ul>

</div>

@include('management.footer')
    
</body>
</html>