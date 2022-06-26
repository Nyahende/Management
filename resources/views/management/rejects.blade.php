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
    <span class="released-Rejects-header">REJECTS</span>

<div class="tabbed-panel">
        <div class="tabbedul">
            <ul>
            <li><a href="#Reject1" >Reject 1</a></li> 
            <li ><a href="#Reject2">Reject 2</a></li>  
            <li ><a href="#Reject3">Reject 3</a></li> 
            <li ><a href="#Reject4">Reject 4</a></li> 
            <li ><a href="#Reject5">Reject 5</a></li> 
            <li ><a href="#Reject6">Reject 6</a></li>
            <li ><a href="#Reject7">Reject 7</a></li>
            <li ><a href="#Reject8">Reject 8</a></li>
            <li ><a href="#Reject9">Reject 9</a></li>
            <li ><a href="#Reject10">Reject 10</a></li>
            </ul>
        </div>
        <div class="tabbed-content">
            <div id="Reject1">
                <span class="Reject-header">Reject One</span><br>
                    @if(Session::get('addreject1'))
                        <div class="Reject-success">
                            {{Session::get('addreject1')}}
                        </div>
                    @endif
                    @if(Session::get('deletereject'))
                  <div class="Reject-success">
                    {{Session::get('deletereject')}}
                  </div>
                  @endif
                  @if(Session::get('updatereject'))
                  <div class="Reject-success">
                    {{Session::get('updatereject')}}
                  </div>
                @endif
                <div class="add-product-form">

                    <form action="{{route('addrej1')}}" method="post">
                       @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity1" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname1" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp1" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload">Upload</button>
                        </div>
                    </form>
                    
                </div>

            <button class="add-announce-btn" id="add-product-btn">Add Reject</button>
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
            <div id="Reject2">

            <span class="Reject-header">Reject two</span> <br>
            <div class="add-product-form-2">
                    <form action="{{route('addrej2')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity2" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname2" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp2" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-2">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-2">Add Reject</button>
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
            <div id="Reject3">

            <span class="Reject-header">Reject three</span> <br>
            <div class="add-product-form-3">
                    <form action="{{route('addrej3')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity3" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname3" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp3" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-3">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-3">Add Reject</button>
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
            <div id="Reject4">

            <span class="Reject-header">Reject Four</span> <br>
            <div class="add-product-form-4">
                    <form action="{{route('addrej4')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity4" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname4" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp4" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-4">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-4">Add Reject</button>
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
            <div id="Reject5">

            <span class="Reject-header">Reject Five</span> <br>
            <div class="add-product-form-5">
                    <form action="{{route('addrej5')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity5" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname5" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp5" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-5">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-5">Add Reject</button>
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
            <div id="Reject6">

            <span class="Reject-header">Reject Six</span> <br>
            <div class="add-product-form-6">
                    <form action="{{route('addrej6')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity6" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname6" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp6" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-6">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-6">Add Reject</button>
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
            <div id="Reject7">

            <span class="Reject-header">Reject Seven</span> <br>
            <div class="add-product-form-7">
                    <form action="{{route('addrej7')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity7" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname7" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp7" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-7">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-7">Add Reject</button>
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
            <div id="Reject8">

            <span class="Reject-header">Reject Eight</span> <br>
            <div class="add-product-form-8">
                    <form action="{{route('addrej8')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity8" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname8" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp8" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-8">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-8">Add Reject</button>
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
            <div id="Reject9">

            <span class="Reject-header">Reject Nine</span> <br>
            <div class="add-product-form-9">
                    <form action="{{route('addrej9')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity9" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname9" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp9" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-9">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-9">Add Reject</button>
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
            <div id="Reject10">

            <span class="Reject-header">Reject Ten</span> <br>
            <div class="add-product-form-10">
                    <form action="{{route('addrej10')}}" method="post">
                        @csrf
                        <div class="inside-Reject-form">
                            <input type="text" name="rejectquantity10" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="rejectname10" id="" placeholder="Reject Name" class="product-input">
                            <input type="text" name="rejectapp10" id="" placeholder="Approval" class="product-input">
                            <button type="submit" class="add-announce-btn" id="product-upload-10">Upload</button>
                        </div>
                    </form>
                </div>

            <button class="add-announce-btn" id="add-product-btn-10">Add Reject</button>
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