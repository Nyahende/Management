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
        <button class="add-announce-btn" id="add-announce-btn">Announce</button>
        <div class="announcement-form-outside-div">
            <form action="{{route('addannounce')}}" method="post">
                @csrf
                <div class="announcement-form-inside-div">
                    <input type="text" placeholder="Type the announcement" class="announce-input" name="announce">
                    <button type="submit" class="announce-btn" id="announce-btn-upload">Upload</button>
                </div>
            </form>
        </div>
        <table class="announcement-table">
            <tr>
                <th>Date</th>
                <th>Announced By</th>
                <th>Announcement</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($announce as $item)
            <tr>
                <td>{{$item->updated_at}}</td>
                <td>{{$item->Announcer}}</td>
                <td>{{$item->Announcement}}</td>
                <td><a href="{{'editannounce/'.$item->id}}"> Edit </a></td>
                <td><a href="{{'deleteannounce/'.$item->id}}">Delete</a></td>
            </tr>     
            @endforeach      
        </table>
    </div>
</div>

@include('management.footer')
    
</body>
</html>