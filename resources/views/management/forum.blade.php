<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | Forum</title>
</head>

     <link rel="stylesheet" href="{{asset('/main.css')}}"/>
     <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>     
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/management.js')}}" type="text/javascript"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

<body>
@include('management.header')
@include('management.sidediv')

<div class="announcements">
    <span class="reporting-title">Forum</span><br>
    <div class="forum-form">
        <form id="forum-form-id">
            @csrf
            <input type="text" placeholder="Type here" class="forum-input" name="body" id="body">
            <button type="submit" class="forum-send-btn" id="forum-send-btn">Send</button>
        </form>
    </div> 
    <div class="forum-display-div">

        <div class="single-text">
            <div class="single-text-div">
                <span class="sender_name"></span>
                <span class="text-time"></span>
            </div>          
        </div>


    </div>
  
</div>
<script>
      $(document).ready(function(){

        // RETRIEVING A TEXT MESSAGE

        fetchtexts();

         function fetchtexts()
         {
             $.ajax({
                 type:'get',
                 url:'fetch-texts',
                 dataType:'json',
                 success: function(response)
                 {
                    $('.single-text').html("");
                    $.each(response.thetexts, function(key, item){
                        $('.single-text').append('\
                            <div class="sender_name">'+item.sender_name+'</div>\
                            <div class="single-text-div">'+item.body+'</div>\
                            <span class="text-time">'+item.created_at+'</span>\
                        '); 
                    });
                     
                }
             });
         }





        // SENDING A TEXT MESSAGE

        $('#forum-form-id').submit(function(e){
            e.preventDefault();

            $value = $('#body').val();
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':
                    $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                        url:'{{URL::to('send-text')}}',
                        type:"post",
                        data:{'body':$value},
                        success:function(response)
                        {
                            $('#forum-form-id')[0].reset();
                            fetchtexts();
                        }
                    });         
            });     
        });
</script>

<div class="left-div">
    <ul>
        <li><a href="{{route('report')}}"> Report</a></li><hr>
        <li><a href="{{route('forum')}}"> Forum</a></li><hr>
    </ul>
</div>

@include('management.footer')
    
</body>
</html>