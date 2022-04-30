<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament System | CHARTS</title>
</head>

     <link rel="stylesheet" href="{{asset('/main.css')}}"/>
        
     <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>     
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/management.js')}}" type="text/javascript"></script>
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>     
      <script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>  
      <script src="{{asset('assets/plugins/chart.js/Chart.bundle.js')}}"></script>
      <script src="{{asset('assets/plugins/chart.js/Chart.js')}}"></script>
      <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.css')}}"/>
      <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.min.css')}}"/> 


<body>
@include('management.header')
@include('management.sidediv')

<div class="products-div">
    <button class="add-announce-btn" ><a href="{{route('index')}}"> Home</a></button>
    <span class="released-products-header">CHARTS</span>

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

                      <div class="daily-chart-div">

                        <span>Daily Chart records</span> <br>


                      </div>
                
                      <div class="monthly-chart-div">

                       <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">
                              <span>Product 01</span>
                            <div class="min" >Min:{{number_format($min1)}}</div>
                            <div class="min">Max:{{number_format($maximum1)}}</div>
                            <div class="min" >Avg:{{round($avgpro1,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec1)}}</div>

                            <span>Rejects 01</span>

                            <div class="min" >Min:{{$minrej1}}</div>
                            <div class="min">Max:{{number_format($maximumrej1)}}</div>
                            <div class="min" >Avg:{{round($avgrej1,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec1)}}</div>
                         </div>
                       </div>
                      
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct1 = {{@json_encode($ProductRec1) }};
                              var arrayrej1 = {{@json_encode($RejectRec1) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart').get(0).getContext('2d')

                              var barChartData = {
                                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
                                
                                datasets: [
                                  { 
                                    label               : 'Product 01',
                                    backgroundColor     : 'green',
                                    borderColor         : 'rgba(60,141,188,0.8)',
                                    pointRadius         : false,
                                    pointColor          : '#3b8bba',
                                    pointStrokeColor    : 'rgba(60,141,188,1)',
                                    pointHighlightFill  : '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                    data                : arrayproduct1
                                  },
                                  {
                                    label               : 'Rejects 01',
                                    backgroundColor     : 'red',
                                    borderColor         : 'rgba(210, 214, 222, 1)',
                                    pointRadius         : false,
                                    pointColor          : 'rgba(210, 214, 222, 1)',
                                    pointStrokeColor    : '#c1c7d1',
                                    pointHighlightFill  : '#fff',
                                    pointHighlightStroke: 'rgba(220,220,220,1)',
                                    data                :arrayrej1
                                  },
                              
                                  
                                ]
                              }

                              var barChartOptions = {
                                responsive              : false,
                                maintainAspectRatio     : false,
                                datasetFill             : false,
                                scales:{
                                  yAxes:[{
                                    ticks:{
                                      fontColor:'white',
                                    },
                                  }],
                                  xAxes:[{
                                    ticks:{
                                      fontColor:'white',
                                    },
                                  }],
                                  },
                                title:{
                                  display:true,
                                  text:['Rejects 01 vs Products 01 vs Time','Source:Berger Management System'],
                                  fontSize:18,
                                  fontColor:'white',
                                },
                                subtitle:{
                                  display:true,
                                  text:'subtitle'
                                },
                                legend:{
                                  display:true,
                                  position:'top',
                                  labels:{
                                    fontColor:'white',
                                  }
                                }
                              }
                              // This will get the first returned node in the jQuery collection.
                              new Chart(barChartCanvas, {
                                type: 'bar',
                                data: barChartData,
                                options: barChartOptions
                              });
                            });
                        </script>

                      </div>

            </div>
            <div id="product2">

            <span class="product-header">Product two</span> <br>

                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
           
            </div>
            <div id="product3">

            <span class="product-header">Product three</span> <br>

                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
            
            </div>
            <div id="product4">

            <span class="product-header">Product four</span> <br>

                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
                           
            </div>
            <div id="product5">
            <span class="product-header">Product five</span> <br>

               <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
                
            </div>
            <div id="product6">
            <span class="product-header">Product six</span> <br>

               <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
               
            </div>
            <div id="product7">
            <span class="product-header">Product seven</span> <br>

            
                
            </div>
            <div id="product8">

            <span class="product-header">Product Eight</span> <br>

                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
                
            </div>
            <div id="product9">

            <span class="product-header">Product Nine</span> <br>

                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>

                </div>

                
            </div>
            <div id="product10">

            <span class="product-header">Product Ten</span> <br>
            
                <div class="daily-chart-div">
                    
                    <span>Daily Chart records</span>

                </div>
                
                <div class="monthly-chart-div">

                <span>Monthly Chart records</span>

                </div>
           
                
            </div>
        </div>
</div>
    
</div>


@include('management.footer')
    
</body>
</html>