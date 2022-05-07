<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | Rejects</title>
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
        <div class="tabbedul">
            <ul>
            <li><a href="#product1" >Product 1</a></li> 
            <li ><a href="#product2">Product 2</a></li>  
            <li ><a href="#product3">Product 3</a></li> 
            <li ><a href="#product4">Product 4</a></li> 
            <li ><a href="#product5">Product 5</a></li> 
            <li ><a href="#product6">Product 6</a></li>
            <li ><a href="#product7">Product 7</a></li>
            <li ><a href="#product8">Product 8</a></li>
            <li ><a href="#product9">Product 9</a></li>
            <li ><a href="#product10">Product 10</a></li>
            </ul>
        </div>
        <div class="tabbed-content">
            <div id="product1">
                <span class="product-header">Product One</span><br>
                    @if(Session::get('addreject1'))
                        <div class="product-success">
                            {{Session::get('addreject1')}}
                        </div>
                    @endif
                    @if(Session::get('deletereject'))
                  <div class="product-success">
                    {{Session::get('deletereject')}}
                  </div>
                  @endif
                  @if(Session::get('updatereject'))
                  <div class="product-success">
                    {{Session::get('updatereject')}}
                  </div>
                @endif
                <div class="add-product-form">
                    <form action="{{route('addrej1')}}" method="post">
                       @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity1" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname1" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp1" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject1 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach     
            
        </table>

            </div>
            <div id="product2">

            <span class="product-header">Product two</span> <br>
            <div class="add-product-form-2">
                    <form action="{{route('addrej2')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity2" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname2" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp2" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-2">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-2">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject2 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach   
            
        </table>
                
            </div>
            <div id="product3">

            <span class="product-header">Product three</span> <br>
            <div class="add-product-form-3">
                    <form action="{{route('addrej3')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity3" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname3" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp3" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-3">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-3">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject3 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach   
            
        </table>

            </div>
            <div id="product4">

            <span class="product-header">Product Four</span> <br>
            <div class="add-product-form-4">
                    <form action="{{route('addrej4')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity4" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname4" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp4" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-4">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-4">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject4 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product5">

            <span class="product-header">Product Five</span> <br>
            <div class="add-product-form-5">
                    <form action="{{route('addrej5')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity5" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname5" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp5" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-5">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-5">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject5 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach  
            
        </table>

                
            </div>
            <div id="product6">

            <span class="product-header">Product Six</span> <br>
            <div class="add-product-form-6">
                    <form action="{{route('addrej6')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity6" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname6" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp6" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-6">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-6">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject6 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product7">

            <span class="product-header">Product Seven</span> <br>
            <div class="add-product-form-7">
                    <form action="{{route('addrej7')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity7" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname7" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp7" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-7">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-7">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject7 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product8">

            <span class="product-header">Product Eight</span> <br>
            <div class="add-product-form-8">
                    <form action="{{route('addrej8')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity8" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname8" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp8" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-8">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-8">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject8 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach   
            
        </table>

                
            </div>
            <div id="product9">

            <span class="product-header">Product Nine</span> <br>
            <div class="add-product-form-9">
                    <form action="{{route('addrej9')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity9" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname9" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp9" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-9">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-9">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject9 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach   
            
        </table>

                
            </div>
            <div id="product10">

            <span class="product-header">Product Ten</span> <br>
            <div class="add-product-form-10">
                    <form action="{{route('addrej10')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="rejectquantity10" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname10" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="rejectapp10" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-10">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-10">Add Product</button>
            <table class="products-table">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Approved By</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($Reject10 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editreject/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deletereject/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach   
            
        </table>

                
            </div>
        </div>
</div>
    
</div>


@include('management.footer')
    
</body>
</html>