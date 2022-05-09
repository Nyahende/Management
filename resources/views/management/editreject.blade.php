<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | Released Products</title>
</head>

     <link rel="stylesheet" href="{{asset('/main.css')}}"/>
     <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>     
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/management.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>


<body>
@include('management.header')
@include('management.sidediv')

<div class="products-div">
    <button class="add-announce-btn" ><a href="{{route('index')}}"> Home</a></button>
    <span class="released-products-header">REJECTS</span>

<div class="tabbed-panel">
        
        <div class="tabbed-content">
            <div id="product1">
                <span class="product-header"></span><br>
                <div class="edit-product-form">
                    <form action="{{route('updatereject')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="hidden" name="id" value="{{$updaterejects['id']}}">
                            <input type="text" name="rejectquantity" id="" placeholder="Quantity" class="product-input" value="{{$updaterejects['Quantity']}}">
                            <input type="text" name="rejectname" id="" placeholder="Product Name" class="product-input" value="{{$updaterejects['Product_Name']}}">
                            <input type="text" name="rejectapproval" id="" placeholder="Approval" class="product-input" value="{{$updaterejects['Approval']}}">
                            <button type="submit" class="add-announce-btn" id="product-upload">Update</button>
                        </div>
                    </form>
                </div>
            </div>         
        </div>
</div>
    
</div>


@include('management.footer')
    
</body>
</html>