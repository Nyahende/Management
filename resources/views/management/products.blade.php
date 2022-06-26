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
    <span class="released-products-header">RELEASED PRODUCTS</span>

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
                @if(Session::get('addproduct1'))
                  <div class="Reject-success">
                    {{Session::get('addproduct1')}}
                  </div>
                @endif
                @if(Session::get('deleteproduct'))
                  <div class="Reject-success">
                    {{Session::get('deleteproduct')}}
                  </div>
                @endif
                @if(Session::get('updateproduct'))
                  <div class="Reject-success">
                    {{Session::get('updateproduct')}}
                  </div>
                @endif
                <div class="add-product-form">
                    <form action="{{route('addproduct1')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity1" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname1" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp1" id="" placeholder="Approval" class="product-input">
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
            @foreach($product1 as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->updated_at}}</td>
                <td>{{$item->Quantity}}</td>
                <td>{{$item->Approval}}</td>
                <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
            </tr>   
            @endforeach 
            
        </table>

            </div>
            <div id="product2">

            <span class="product-header">Product two</span> <br>
            <div class="add-product-form-2">
                    <form action="{{route('addproduct2')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity2" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname2" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp2" id="" placeholder="Approval" class="product-input">
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

            @foreach($product2 as $item)

            <tr>
                <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach
        </table>
                
            </div>
            <div id="product3">

            <span class="product-header">Product three</span> <br>
            <div class="add-product-form-3">
                    <form action="{{route('addproduct3')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity3" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname3" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp3" id="" placeholder="Approval" class="product-input">
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
            @foreach($product3 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

            </div>
            <div id="product4">

            <span class="product-header">Product Four</span> <br>
            <div class="add-product-form-4">
                    <form action="{{route('addproduct4')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity4" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname4" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp4" id="" placeholder="Approval" class="product-input">
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
            @foreach($product4 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product5">

            <span class="product-header">Product Five</span> <br>
            <div class="add-product-form-5">
                    <form action="{{route('addproduct5')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity5" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname5" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp5" id="" placeholder="Approval" class="product-input">
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
            @foreach($product5 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product6">

            <span class="product-header">Product Six</span> <br>
            <div class="add-product-form-6">
                    <form action="{{route('addproduct6')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity6" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname6" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp6" id="" placeholder="Approval" class="product-input">
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
            @foreach($product6 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product7">

            <span class="product-header">Product Seven</span> <br>
            <div class="add-product-form-7">
                    <form action="{{route('addproduct7')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity7" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname7" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp7" id="" placeholder="Approval" class="product-input">
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
            @foreach($product7 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product8">

            <span class="product-header">Product Eight</span> <br>
            <div class="add-product-form-8">
                    <form action="{{route('addproduct8')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity8" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname8" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp8" id="" placeholder="Approval" class="product-input">
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
            @foreach($product8 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product9">

            <span class="product-header">Product Nine</span> <br>
            <div class="add-product-form-9">
                    <form action="{{route('addproduct9')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity9" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname9" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp9" id="" placeholder="Approval" class="product-input">
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
            @foreach($product9 as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
                </tr>    
            @endforeach    
            
        </table>

                
            </div>
            <div id="product10">

            <span class="product-header">Product Ten</span> <br>
            <div class="add-product-form-10">
                    <form action="{{route('addproduct10')}}" method="post">
                        @csrf
                        <div class="inside-product-form">
                            <input type="text" name="prodctquantity10" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="productname10" id="" placeholder="Product Name" class="product-input">
                            <input type="text" name="productapp10" id="" placeholder="Approval" class="product-input">
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
            
            @foreach($product10 as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->Quantity}}</td>
                    <td>{{$item->Approval}}</td>
                    <td><a href="{{'editproduct/'.$item->id}}"> Edit </a></td>
                    <td><a href="{{'deleteproduct/'.$item->id}}">Delete</a></td>
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