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
@include('management.sidediv')

<div class="announcements">
    <div class="announce-outside-table">
        <div class="edit-announcement-form-outside-div">
            <form action="{{route('updateannounce')}}" method="post">
                @csrf
                <div class="announcement-form-inside-div">

                    <input type="hidden" name="id" value="{{$announce['id']}}">
                    <input type="text" placeholder="Type the announcement" class="announce-input" name="editannounce" value="{{$announce['Announcement']}}">
                    <button type="submit" class="announce-btn" id="announce-btn-upload">Upload</button>
                </div>
            </form>
        </div>
        
    </div>
</div>

<div class="left-div">
    <ul>
        <li><a href="{{route('report')}}"> Report</a></li><hr class="left-div-hr"><hr>
        <li><a href="{{route('forum')}}"> Forum</a></li><hr class="left-div-hr"><hr>
    </ul>

</div>

@include('management.footer')
    
</body>
</html>