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
            <li class="active"><a href="#product1" >Product 1</a></li> 
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
                <div class="add-product-form">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product2">

            <span class="product-header">Product two</span> <br>
            <div class="add-product-form-2">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product3">

            <span class="product-header">Product three</span> <br>
            <div class="add-product-form-3">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product4">

            <span class="product-header">Product Four</span> <br>
            <div class="add-product-form-4">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product5">

            <span class="product-header">Product Five</span> <br>
            <div class="add-product-form-5">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product6">

            <span class="product-header">Product Six</span> <br>
            <div class="add-product-form-6">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product7">

            <span class="product-header">Product Seven</span> <br>
            <div class="add-product-form-7">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product8">

            <span class="product-header">Product Eight</span> <br>
            <div class="add-product-form-8">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product9">

            <span class="product-header">Product Nine</span> <br>
            <div class="add-product-form-9">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
            <div id="product10">

            <span class="product-header">Product Ten</span> <br>
            <div class="add-product-form-10">
                    <form action="" method="post">
                        <div class="inside-product-form">
                            <input type="text" name="" id="" placeholder="Quantity" class="product-input">
                            <input type="text" name="" id="" placeholder="Approval" class="product-input">
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
            <tr>
                <td>01</td>
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
</div>
    
</div>


@include('management.footer')
    
</body>
</html>