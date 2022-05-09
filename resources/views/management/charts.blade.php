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

                        <span class="monthly-chart-record">Daily Chart records</span> <br>

                        <form action="{{route('chartsinput')}}" method="post">
                            @csrf
                            <input type="text" placeholder="Choose Year" class="product-input" name="year">
                            <input type="text" placeholder="Choose Month" class="product-input" name="month">
                            <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                        </form> <br>

                       <canvas id="barChartdaily1" ></canvas>
                       <div class="daily-chart-desc">
                         <div class="chart-desc-inner">
                             <div class="inner-products">
                              <span>Product 01</span>
                            <div class="min" >Min:{{number_format($dailypromin1)}}</div>
                            <div class="min">Max:{{number_format($dailypromaximum1)}}</div>
                            <div class="min" >Avg:{{round($dailyproavg1,2)}}</div>
                            <div class="min">Total:{{number_format($dailyprototal1)}}</div>
                            </div>
                            <div class="inner-rejects">
                            <span>Rejects 01</span>

                            <div class="min" >Min:{{$dailyminrej1}}</div>
                            <div class="min">Max:{{number_format($dailymaxrej1)}}</div>
                            <div class="min" >Avg:{{round($dailyavgrej1,2)}}</div>
                            <div class="min">Total:{{number_format($dailytotalrej1)}}</div>
                            </div>
                         </div>
                       </div>


                      </div>
                


                      <div class="monthly-chart-div">

                       <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart1" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">
                         <div class="inner-products">
                              <span>Product 01</span>
                            <div class="min" >Min:{{number_format($min1)}}</div>
                            <div class="min">Max:{{number_format($maximum1)}}</div>
                            <div class="min" >Avg:{{round($avgpro1,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec1)}}</div>
                            </div>
                            <div class="inner-rejects">
                            <span>Rejects 01</span>

                            <div class="min" >Min:{{$minrej1}}</div>
                            <div class="min">Max:{{number_format($maximumrej1)}}</div>
                            <div class="min" >Avg:{{round($avgrej1,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec1)}}</div>
                            </div>
                         </div>
                       </div>
                       <!-- PRODUCT ONE DAILY -->
                      
                                   <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyPro1 = {{@json_encode($dailypro1) }};
                                        var dailyRej1 = {{@json_encode($dailyRej1) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily1').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyPro1
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
                                              data                :dailyRej1
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT ONE MONTHLY -->
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
                              var barChartCanvas = $('#barChart1').get(0).getContext('2d')

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
                    
                <span class="monthly-chart-record">Daily Chart records</span> <br>

                    <form action="{{route('chartsinput')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Choose Year" class="product-input" name="year">
                        <input type="text" placeholder="Choose Month" class="product-input" name="month">
                        <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                    </form> <br>

                    <canvas id="barChartdaily2" ></canvas>
                    <div class="daily-chart-desc">
                    <div class="chart-desc-inner">
                    <div class="inner-products">
                          <span>Product 02</span>
                        <div class="min" >Min:{{number_format($dailypromin2)}}</div>
                        <div class="min">Max:{{number_format($dailypromaximum2)}}</div>
                        <div class="min" >Avg:{{round($dailyproavg2,2)}}</div>
                        <div class="min">Total:{{number_format($dailyprototal2)}}</div>
                        </div>

                        <div class="inner-rejects">
                        <span>Rejects 02</span>

                        <div class="min" >Min:{{$dailyminrej2}}</div>
                        <div class="min">Max:{{number_format($dailymaxrej2)}}</div>
                        <div class="min" >Avg:{{round($dailyavgrej2,2)}}</div>
                        <div class="min">Total:{{number_format($dailytotalrej2)}}</div>
                        </div>
                    </div>
                    </div>

                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart2" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">
                         <div class="inner-products">
                              <span>Product 02</span>
                            <div class="min" >Min:{{number_format($min2)}}</div>
                            <div class="min">Max:{{number_format($maximum2)}}</div>
                            <div class="min" >Avg:{{round($avgpro2,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec2)}}</div>
                          </div>

                          <div class="inner-rejects">

                            <span>Rejects 02</span>

                            <div class="min" >Min:{{$minrej2}}</div>
                            <div class="min">Max:{{number_format($maximumrej2)}}</div>
                            <div class="min" >Avg:{{round($avgrej2,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec2)}}</div>
                          </div>
                         </div>

                </div>
                 <!-- PRODUCT TWO DAILY -->
                      
                 <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyPro2 = {{@json_encode($dailypro2) }};
                                        var dailyRej2 = {{@json_encode($dailyRej2) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily2').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyPro2
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
                                              data                :dailyRej2
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT TWO MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproductmonthly2 = {{@json_encode($ProductRec2) }};
                              var arrayrejmonthly2 = {{@json_encode($RejectRec2) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart2').get(0).getContext('2d')

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
                                    data                : arrayproductmonthly2
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
                                    data                :arrayrejmonthly2
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
            <div id="product3">

            <span class="product-header">Product three</span> <br>

                <div class="daily-chart-div">
                    
                <span class="monthly-chart-record">Daily Chart records</span> <br>

                      <form action="{{route('chartsinput')}}" method="post">
                          @csrf
                          <input type="text" placeholder="Choose Year" class="product-input" name="year">
                          <input type="text" placeholder="Choose Month" class="product-input" name="month">
                          <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                      </form> <br>

                      <canvas id="barChartdaily3" ></canvas>
                      <div class="daily-chart-desc">
                      <div class="chart-desc-inner">

                     
                         <div class="inner-products">

                            <span>Product 03</span>
                          <div class="min" >Min:{{number_format($dailypromaximum3)}}</div>
                          <div class="min">Max:{{number_format($dailypromin3)}}</div>
                          <div class="min" >Avg:{{round($dailyproavg3,2)}}</div>
                          <div class="min">Total:{{number_format($dailyprototal3)}}</div>
                        </div>
                          
                        <div class="inner-rejects">
                          <span>Rejects 03</span>

                          <div class="min" >Min:{{$dailyminrej3}}</div>
                          <div class="min">Max:{{number_format($dailymaxrej3)}}</div>
                          <div class="min" >Avg:{{round($dailyavgrej3,2)}}</div>
                          <div class="min">Total:{{number_format($dailytotalrej3)}}</div>
                        </div>
                      </div>
                      </div>

                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart3" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                         <div class="inner-products">

                              <span>Product 03</span>
                            <div class="min" >Min:{{number_format($min3)}}</div>
                            <div class="min">Max:{{number_format($maximum3)}}</div>
                            <div class="min" >Avg:{{round($avgpro3,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec3)}}</div>

                          </div>

                          <div class="inner-rejects">

                            <span>Rejects 03</span>
                            <div class="min" >Min:{{$minrej3}}</div>
                            <div class="min">Max:{{number_format($maximumrej3)}}</div>
                            <div class="min" >Avg:{{round($avgrej3,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec3)}}</div>

                          </div>
                         </div>

            
            </div>
             <!-- PRODUCT THREE DAILY -->
                      
             <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyarrayPro3 = {{@json_encode($dailypro3) }};
                                        var dailyarrayRej3 = {{@json_encode($dailyRej3) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily3').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyarrayPro3
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
                                              data                :dailyarrayRej3
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT THREE MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct3 = {{@json_encode($ProductRec3) }};
                              var arrayrej3 = {{@json_encode($RejectRec3) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart3').get(0).getContext('2d')

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
                                    data                : arrayproduct3
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
                                    data                :arrayrej3
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
            <div id="product4">

            <span class="product-header">Product four</span> <br>

                <div class="daily-chart-div">
                    
                <span class="monthly-chart-record">Daily Chart records</span> <br>

                      <form action="{{route('chartsinput')}}" method="post">
                          @csrf
                          <input type="text" placeholder="Choose Year" class="product-input" name="year">
                          <input type="text" placeholder="Choose Month" class="product-input" name="month">
                          <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                      </form> <br>

                      <canvas id="barChartdaily4" ></canvas>
                      <div class="daily-chart-desc">
                      <div class="chart-desc-inner">

                        <div class="inner-products">

                            <span>Product 04</span>
                          <div class="min" >Min:{{number_format($dailypromin4)}}</div>
                          <div class="min">Max:{{number_format($dailypromaximum4)}}</div>
                          <div class="min" >Avg:{{round($dailyproavg4,2)}}</div>
                          <div class="min">Total:{{number_format($dailyprototal4)}}</div>
                      
                        </div>


                        <div class="inner-rejects">

                          <span>Rejects 04</span>

                          <div class="min" >Min:{{$dailyminrej4}}</div>
                          <div class="min">Max:{{number_format($dailymaxrej4)}}</div>
                          <div class="min" >Avg:{{round($dailyavgrej4,2)}}</div>
                          <div class="min">Total:{{number_format($dailytotalrej4)}}</div>

                        </div>
                      </div>
                      </div>

                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart4" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                         <div class="inner-products">

                              <span>Product 04</span>
                            <div class="min" >Min:{{number_format($min4)}}</div>
                            <div class="min">Max:{{number_format($maximum4)}}</div>
                            <div class="min" >Avg:{{round($avgpro4,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec4)}}</div>

                          </div>

                          <div class="inner-rejects">

                            <span>Rejects 04</span>

                            <div class="min" >Min:{{$minrej4}}</div>
                            <div class="min">Max:{{number_format($maximumrej4)}}</div>
                            <div class="min" >Avg:{{round($avgrej4,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec4)}}</div>

                          </div>
                         </div>

                           
            </div>
             <!-- PRODUCT FOUR DAILY -->
                      
             <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyPro4 = {{@json_encode($dailypro4) }};
                                        var dailyRej4 = {{@json_encode($dailyRej4) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily4').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyPro4
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
                                              data                :dailyRej4
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT FOUR MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct4 = {{@json_encode($ProductRec4) }};
                              var arrayrej4 = {{@json_encode($RejectRec4) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart4').get(0).getContext('2d')

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
                                    data                : arrayproduct4
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
                                    data                :arrayrej4
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
            <div id="product5">
            <span class="product-header">Product five</span> <br>

               <div class="daily-chart-div">
                    
               <span class="monthly-chart-record">Daily Chart records</span> <br>

                    <form action="{{route('chartsinput')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Choose Year" class="product-input" name="year">
                        <input type="text" placeholder="Choose Month" class="product-input" name="month">
                        <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                    </form> <br>

                    <canvas id="barChartdaily5" ></canvas>
                    <div class="daily-chart-desc">
                    <div class="chart-desc-inner">

                    <div class="inner-products">

                          <span>Product 05</span>
                        <div class="min" >Min:{{number_format($dailypromin5)}}</div>
                        <div class="min">Max:{{number_format($dailypromaximum5)}}</div>
                        <div class="min" >Avg:{{round($dailyproavg5,2)}}</div>
                        <div class="min">Total:{{number_format($dailyprototal5)}}</div>

                    </div>

                    <div class="inner-rejects">

                        <span>Rejects 05</span>

                        <div class="min" >Min:{{$dailyminrej5}}</div>
                        <div class="min">Max:{{number_format($dailymaxrej5)}}</div>
                        <div class="min" >Avg:{{round($dailyavgrej5,2)}}</div>
                        <div class="min">Total:{{number_format($dailytotalrej5)}}</div>

                     </div>
                    </div>
                    </div>

                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart5" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                        <div class="inner-products">

                              <span>Product 05</span>
                            <div class="min" >Min:{{number_format($min5)}}</div>
                            <div class="min">Max:{{number_format($maximum5)}}</div>
                            <div class="min" >Avg:{{round($avgpro5,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec5)}}</div>
                          
                        </div>

                        <div class="inner-rejects">
                            <span>Rejects 05</span>

                            <div class="min" >Min:{{$minrej5}}</div>
                            <div class="min">Max:{{number_format($maximumrej5)}}</div>
                            <div class="min" >Avg:{{round($avgrej5,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec5)}}</div>

                        </div>
                         </div>                
                       </div>
             <!-- PRODUCT FIVE DAILY -->
                      
             <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyarryPro5 = {{@json_encode($dailypro5) }};
                                        var dailyarryRej5 = {{@json_encode($dailyRej5) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily5').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyarryPro5
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
                                              data                :dailyarryRej5
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT FIVE MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct5 = {{@json_encode($ProductRec5) }};
                              var arrayrej5 = {{@json_encode($RejectRec5) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart5').get(0).getContext('2d')

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
                                    data                : arrayproduct5
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
                                    data                :arrayrej5
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
            <div id="product6">
            <span class="product-header">Product six</span> <br>

               <div class="daily-chart-div">
                    
               <span class="monthly-chart-record">Daily Chart records</span> <br>

                    <form action="{{route('chartsinput')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Choose Year" class="product-input" name="year">
                        <input type="text" placeholder="Choose Month" class="product-input" name="month">
                        <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                    </form> <br>

                    <canvas id="barChartdaily6" ></canvas>
                    <div class="daily-chart-desc">
                    <div class="chart-desc-inner">

                    <div class="inner-products">

                          <span>Product 06</span>
                        <div class="min" >Min:{{number_format($dailypromin6)}}</div>
                        <div class="min">Max:{{number_format($dailypromaximum6)}}</div>
                        <div class="min" >Avg:{{round($dailyproavg6,2)}}</div>
                        <div class="min">Total:{{number_format($dailyprototal6)}}</div>

                    </div>

                    <div class="inner-rejects">
                        <span>Rejects 06</span>

                        <div class="min" >Min:{{$dailyminrej6}}</div>
                        <div class="min">Max:{{number_format($dailymaxrej6)}}</div>
                        <div class="min" >Avg:{{round($dailyavgrej6,2)}}</div>
                        <div class="min">Total:{{number_format($dailytotalrej6)}}</div>
                    </div>
                    </div>
                    </div>

                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart6" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                         <div class="inner-products">

                              <span>Product 06</span>
                            <div class="min" >Min:{{number_format($min6)}}</div>
                            <div class="min">Max:{{number_format($maximum6)}}</div>
                            <div class="min" >Avg:{{round($avgpro6,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec6)}}</div>

                          </div>

                          <div class="inner-rejects">

                            <span>Rejects 06</span>

                            <div class="min" >Min:{{$minrej6}}</div>
                            <div class="min">Max:{{number_format($maximumrej6)}}</div>
                            <div class="min" >Avg:{{round($avgrej6,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec6)}}</div>

                          </div>
                         </div>               
                       </div>
             <!-- PRODUCT SIX DAILY -->
                      
             <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyarryPro6 = {{@json_encode($dailypro6) }};
                                        var dailyarryRej6 = {{@json_encode($dailyRej6) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily6').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyarryPro6
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
                                              data                :dailyarryRej6
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT SIX MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct6 = {{@json_encode($ProductRec6) }};
                              var arrayrej6 = {{@json_encode($RejectRec6) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart6').get(0).getContext('2d')

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
                                    data                : arrayproduct6
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
                                    data                :arrayrej6
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
                        <div id="product7">

                <span class="product-header">Product Seven</span> <br>

                <div class="daily-chart-div">


                <span class="monthly-chart-record">Daily Chart records</span> <br>

                      <form action="{{route('chartsinput')}}" method="post">
                          @csrf
                          <input type="text" placeholder="Choose Year" class="product-input" name="year">
                          <input type="text" placeholder="Choose Month" class="product-input" name="month">
                          <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                      </form> <br>

                    <canvas id="barChartdaily7"></canvas>
                    <div class="daily-chart-desc">
                      <div class="chart-desc-inner">

                      <div class="inner-products">

                            <span>Product 07</span>
                          <div class="min" >Min:{{number_format($dailypromin7)}}</div>
                          <div class="min">Max:{{number_format($dailypromaximum7)}}</div>
                          <div class="min" >Avg:{{round($dailyproavg7,2)}}</div>
                          <div class="min">Total:{{number_format($dailyprototal7)}}</div>

                      </div>

                      <div class="inner-rejects">
                          <span>Rejects 07</span>

                          <div class="min" >Min:{{$dailyminrej7}}</div>
                          <div class="min">Max:{{number_format($dailymaxrej7)}}</div>
                          <div class="min" >Avg:{{round($dailyavgrej7,2)}}</div>
                          <div class="min">Total:{{number_format($dailytotalrej7)}}</div>

                      </div>
                      </div>
                    </div>            
                </div>
                <div class="monthly-chart-div">

                    <span class="monthly-chart-record">Monthly Chart records</span>  
                          <form action="{{route('chartsinput')}}" method="post">
                            @csrf
                            <input type="text" placeholder="Choose Year" class="product-input" name="year">
                            <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                          </form> <br>

                          <canvas id="barChart7" ></canvas>
                          <div class="chart-desc">
                            <div class="chart-desc-inner">

                            <div class="inner-products">

                                  <span>Product 07</span>
                                <div class="min" >Min:{{number_format($min7)}}</div>
                                <div class="min">Max:{{number_format($maximum7)}}</div>
                                <div class="min" >Avg:{{round($avgpro7,2)}}</div>
                                <div class="min">Total:{{number_format($tatalProductRec7)}}</div>

                            </div>

                            <div class="inner-rejects">

                                <span>Rejects 07</span>

                                <div class="min" >Min:{{$minrej7}}</div>
                                <div class="min">Max:{{number_format($maximumrej7)}}</div>
                                <div class="min" >Avg:{{round($avgrej7,2)}}</div>
                                <div class="min">Total:{{number_format($tatalRejectRec7)}}</div>
                              
                            </div>
                            </div>                
                          </div>
                      <!-- PRODUCT SEVEN DAILY -->
                          
                      <script>
                          $(function () {
                            /* ChartJS
                            * -------
                            * Here we will create a few charts using ChartJS
                            */

                            //--------------
                            //- BAR CHART -
                            //--------------
                            var dailyarryPro7 = {{@json_encode($dailypro7) }};
                            var dailyarryRej7 = {{@json_encode($dailyRej7) }};

                            // Get context with jQuery - using jQuery's .get() method.
                            var barChartCanvas = $('#barChartdaily7').get(0).getContext('2d')

                            var barChartData = {
                              labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                              datasets: [
                                {
                                  label               : 'Product 01',
                                  backgroundColor     : 'green',
                                  borderColor         : 'rgba(60,141,188,0.8)',
                                  pointRadius          : false,
                                  pointColor          : '#3b8bba',
                                  pointStrokeColor    : 'rgba(60,141,188,1)',
                                  pointHighlightFill  : '#fff',
                                  pointHighlightStroke: 'rgba(60,141,188,1)',
                                  data                : dailyarryPro7
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
                                  data                :dailyarryRej7
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
                                text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

           <!-- PRODUCT SEVEN MONTHLY -->
           <script>
                $(function () {
                  /* ChartJS
                  * -------
                  * Here we will create a few charts using ChartJS
                  */

                  //--------------
                  //- BAR CHART -
                  //--------------
                  var arrayproduct7 = {{@json_encode($ProductRec7) }};
                  var arrayrej7 = {{@json_encode($RejectRec7) }};

                  // Get context with jQuery - using jQuery's .get() method.
                  var barChartCanvas = $('#barChart7').get(0).getContext('2d')

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
                        data                : arrayproduct7
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
                        data                :arrayrej7
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
            <div id="product8">

            <span class="product-header">Product Eight</span> <br>

                <div class="daily-chart-div">
                    
                <span class="monthly-chart-record">Daily Chart records</span> <br>

                    <form action="{{route('chartsinput')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Choose Year" class="product-input" name="year">
                        <input type="text" placeholder="Choose Month" class="product-input" name="month">
                        <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                    </form> <br>

                    <canvas id="barChartdaily8" ></canvas>
                  <div class="daily-chart-desc">
                    <div class="chart-desc-inner">

                    <div class="inner-products">

                          <span>Product 08</span>
                        <div class="min" >Min:{{number_format($dailypromin8)}}</div>
                        <div class="min">Max:{{number_format($dailypromaximum8)}}</div>
                        <div class="min" >Avg:{{round($dailyproavg8,2)}}</div>
                        <div class="min">Total:{{number_format($dailyprototal8)}}</div>

                    </div>

                    <div class="inner-rejects">

                        <span>Rejects 08</span>

                        <div class="min" >Min:{{$dailyminrej8}}</div>
                        <div class="min">Max:{{number_format($dailymaxrej8)}}</div>
                        <div class="min" >Avg:{{round($dailyavgrej8,2)}}</div>
                        <div class="min">Total:{{number_format($dailytotalrej8)}}</div>

                    </div>
                    </div>
                  </div>
                </div>

                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart8" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                          <div class="inner-products">

                              <span>Product 08</span>
                            <div class="min" >Min:{{number_format($min8)}}</div>
                            <div class="min">Max:{{number_format($maximum8)}}</div>
                            <div class="min" >Avg:{{round($avgpro8,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec8)}}</div>

                          </div>

                          <div class="inner-rejects">
                            <span>Rejects 08</span>

                            <div class="min" >Min:{{$minrej8}}</div>
                            <div class="min">Max:{{number_format($maximumrej8)}}</div>
                            <div class="min" >Avg:{{round($avgrej8,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec8)}}</div>
                          </div>
                         </div>                
                       </div>
                  <!-- PRODUCT EIGHT DAILY -->
                      
                  <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyarryPro8 = {{@json_encode($dailypro8) }};
                                        var dailyarryRej8 = {{@json_encode($dailyRej8) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily8').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyarryPro8
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
                                              data                :dailyarryRej8
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT EIGHT MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct8 = {{@json_encode($ProductRec8) }};
                              var arrayrej8 = {{@json_encode($RejectRec8) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart8').get(0).getContext('2d')

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
                                    data                : arrayproduct8
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
                                    data                :arrayrej8
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
            <div id="product9">

            <span class="product-header">Product Nine</span> <br>

                <div class="daily-chart-div">
                    
                <span class="monthly-chart-record">Daily Chart records</span> <br>

                    <form action="{{route('chartsinput')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Choose Year" class="product-input" name="year">
                        <input type="text" placeholder="Choose Month" class="product-input" name="month">
                        <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                    </form> <br>

                    <canvas id="barChartdaily9" ></canvas>
                    <div class="daily-chart-desc">
                    <div class="chart-desc-inner">

                    <div class="inner-products">

                          <span>Product 09</span>
                        <div class="min" >Min:{{number_format($dailypromin9)}}</div>
                        <div class="min">Max:{{number_format($dailypromaximum9)}}</div>
                        <div class="min" >Avg:{{round($dailyproavg9,2)}}</div>
                        <div class="min">Total:{{number_format($dailyprototal9)}}</div>

                    </div>


                    <div class="inner-rejects">

                        <span>Rejects 09</span>

                        <div class="min" >Min:{{$dailyminrej9}}</div>
                        <div class="min">Max:{{number_format($dailymaxrej9)}}</div>
                        <div class="min" >Avg:{{round($dailyavgrej9,2)}}</div>
                        <div class="min">Total:{{number_format($dailytotalrej9)}}</div>

                    </div>
                    </div>
                    </div>

                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart9" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                        <div class="inner-products">

                              <span>Product 09</span>
                            <div class="min" >Min:{{number_format($min9)}}</div>
                            <div class="min">Max:{{number_format($maximumrej9)}}</div>
                            <div class="min" >Avg:{{round($avgpro9,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec9)}}</div>

                        </div>

                        <div class="inner-rejects">

                            <span>Rejects 09</span>

                            <div class="min" >Min:{{$minrej9}}</div>
                            <div class="min">Max:{{number_format($maximumrej9)}}</div>
                            <div class="min" >Avg:{{round($avgrej9,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec9)}}</div>

                          </div>
                         </div>
                         </div>
 <!-- PRODUCT NINE DAILY -->
                      
 <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyarryPro9 = {{@json_encode($dailypro9) }};
                                        var dailyarryRej9 = {{@json_encode($dailyRej9) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily9').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyarryPro9
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
                                              data                :dailyarryRej9
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT NINE MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct9 = {{@json_encode($ProductRec9) }};
                              var arrayrej9 = {{@json_encode($RejectRec9) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart9').get(0).getContext('2d')

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
                                    data                : arrayproduct9
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
                                    data                :arrayrej9
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
                
            <div id="product10">

            <span class="product-header">Product Ten</span> <br>
            
                <div class="daily-chart-div">
                    
                <span class="monthly-chart-record">Daily Chart records</span> <br>

                    <form action="{{route('chartsinput')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Choose Year" class="product-input" name="year">
                        <input type="text" placeholder="Choose Month" class="product-input" name="month">
                        <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}/{{$month}}</span>
                    </form> <br>

                    <canvas id="barChartdaily10" ></canvas>
                    <div class="daily-chart-desc">
                    <div class="chart-desc-inner">

                    <div class="inner-products">

                          <span>Product 10</span>
                        <div class="min" >Min:{{number_format($dailypromin10)}}</div>
                        <div class="min">Max:{{number_format($dailypromaximum10)}}</div>
                        <div class="min" >Avg:{{round($dailyproavg10,2)}}</div>
                        <div class="min">Total:{{number_format($dailyprototal10)}}</div>

                    </div>


                    <div class="inner-rejects">

                        <span>Rejects 10</span>

                        <div class="min" >Min:{{$dailyminrej10}}</div>
                        <div class="min">Max:{{number_format($dailymaxrej10)}}</div>
                        <div class="min" >Avg:{{round($dailyavgrej10,2)}}</div>
                        <div class="min">Total:{{number_format($dailytotalrej10)}}</div>

                    </div>
                    </div>
                    </div>


                </div>
                
                <div class="monthly-chart-div">

                <span class="monthly-chart-record">Monthly Chart records</span>  
                       <form action="{{route('chartsinput')}}" method="post">
                         @csrf
                         <input type="text" placeholder="Choose Year" class="product-input" name="year">
                         <button type="submit" class="add-announce-btn">Submit</button> <span>Year:{{$year}}</span>
                       </form> <br>

                       <canvas id="barChart10" ></canvas>
                       <div class="chart-desc">
                         <div class="chart-desc-inner">

                        <div class="inner-products">

                              <span>Product 10</span>
                            <div class="min" >Min:{{number_format($min10)}}</div>
                            <div class="min">Max:{{number_format($maximum10)}}</div>
                            <div class="min" >Avg:{{round($avgpro10,2)}}</div>
                            <div class="min">Total:{{number_format($tatalProductRec10)}}</div>

                        </div>


                        <div class="inner-rejects">

                            <span>Rejects 10</span>

                            <div class="min" >Min:{{$minrej10}}</div>
                            <div class="min">Max:{{number_format($maximumrej10)}}</div>
                            <div class="min" >Avg:{{round($avgrej10,2)}}</div>
                            <div class="min">Total:{{number_format($tatalRejectRec10)}}</div>
                         </div>
                        </div>
                       </div>
                          <!-- PRODUCT TEN DAILY -->
                      
                          <script>
                                      $(function () {
                                        /* ChartJS
                                        * -------
                                        * Here we will create a few charts using ChartJS
                                        */

                                        //--------------
                                        //- BAR CHART -
                                        //--------------
                                        var dailyarryPro10 = {{@json_encode($dailypro10) }};
                                        var dailyarryRej10 = {{@json_encode($dailyRej10) }};

                                        // Get context with jQuery - using jQuery's .get() method.
                                        var barChartCanvas = $('#barChartdaily10').get(0).getContext('2d')

                                        var barChartData = {
                                          labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
                                          datasets: [
                                            {
                                              label               : 'Product 01',
                                              backgroundColor     : 'green',
                                              borderColor         : 'rgba(60,141,188,0.8)',
                                              pointRadius          : false,
                                              pointColor          : '#3b8bba',
                                              pointStrokeColor    : 'rgba(60,141,188,1)',
                                              pointHighlightFill  : '#fff',
                                              pointHighlightStroke: 'rgba(60,141,188,1)',
                                              data                : dailyarryPro10
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
                                              data                :dailyarryRej10
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
                                            text:['Produt 01 vs Rejects 01 vs Time','Source:Berger Management System'],
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

                       <!-- PRODUCT TEN MONTHLY -->
                       <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct10 = {{@json_encode($ProductRec10) }};
                              var arrayrej10 = {{@json_encode($RejectRec10) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#barChart10').get(0).getContext('2d')

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
                                    data                : arrayproduct10
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
                                    data                :arrayrej10
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
        </div>
</div>
    
</div>


@include('management.footer')
    
</body>
</html>