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
            <form action="" method="post">
                <div class="announcement-form-inside-div">
                    <input type="text" placeholder="Type the announcement" class="announce-input">
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
            <tr>
                <td>22/04/2022</td>
                <td>Michael Nyahende</td>
                <td class="announcement-td">The announcement has to be as long as
                     possible so as to check 
                     whether it will fit or not
                </td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>           
        </table>
    </div>
</div>

<div class="left-div">
    <ul>
        <li><a href=""> Report</a></li><hr>
        <li><a href=""> Forum</a></li><hr>
        <li><a href=""> Workers</a></li>
    </ul>

</div>

@include('management.footer')
    
</body>
</html>