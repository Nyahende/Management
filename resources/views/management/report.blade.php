<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | Reporting</title>
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
<button class="add-announce-btn" ><a href="{{route('index')}}"> Home</a></button>

    <span class="reporting-title">
        Reporting
    </span><br>

    <div class="reporting-div">

    <span>Monthly Report:</span> <br>
    <div class="report-froms">
        <div class="first-report-form">
            <form action="" method="post">
                @csrf
                <input type="text" class="report-input" placeholder="Choose a Year"><br>
                <input type="text" class="report-input" placeholder="Choose a Month"><br>
                <button class="add-announce-btn" >View</button>
            </form>
        </div>
        <div class="second-report-form">
            <form action="" method="post">
                <input type="text" class="report-input" placeholder="Choose a Year"><br>
                <input type="text" class="report-input" placeholder="Choose a Month"><br>
                <button class="add-announce-btn" >Download</button>
            </form>
        </div>
    </div>
    </div> 
    <hr>

    <div class="reporting-div">
    <span>Yearly Report:</span> <br>
    <div class="report-froms">
        <form action="{{route('yearlyreportview')}}" method="post">
            @csrf
        <input type="text" class="report-input" placeholder="Choose a Year" name="yearlyreportview"><br>
        <button class="add-announce-btn" type="submit">View</button>
        </form>
        <form action="{{route('yearlyreportdownload')}}" method="post">
            @csrf
        <input type="text" class="report-input" placeholder="Choose a Year" name="yearlyreportview"><br>
        <button class="add-announce-btn" type="submit">Download</button>
        </form>
    </div>
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