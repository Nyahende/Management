<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | Homepage</title>
</head>

     <link rel="stylesheet" href="{{asset('/main.css')}}"/>
     <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>     
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/management.js')}}" type="text/javascript"></script>


<body>
@include('management.header')
@include('management.picturesidediv')

<div class="announcements">

<div class="profile-picture-form">

<form action="{{route('updateprofile')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$profilepicture['id']}}">
    <input type="file" name="file" id="" >
    <button type="submit" class="add-profile-picture-btn">Add Profile Picture</button>
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