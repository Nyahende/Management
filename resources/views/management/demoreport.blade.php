<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
     <link rel="stylesheet" href="{{asset('/report.css')}}"/>
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
@include('management.reportheader')
    

    <div class="report-body">
        <div class="report-table-div-all">
        <div class="report-table-div">
            <Span class="report-product-record">Product Records</Span>
            <table class="report-table">
                <tr>
                    <th>Max</th>
                    <th>Min</th>
                    <th>Avg</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>{{number_format($yearmaximumpro)}}</td>
                    <td>{{number_format($yearminpro)}}</td>
                    <td>{{round($yearavgpro,2)}}</td>
                    <td>{{number_format($TotalYearProduct)}}</td>
                </tr>
            </table>
        </div>   
        <div class="report-table-div">
            <Span class="report-product-record">Reject Records</Span>
            <table class="report-table">
                <tr>
                    <th>Max</th>
                    <th>Min</th>
                    <th>Avg</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>{{number_format($yearmaximumrej)}}</td>
                    <td>{{number_format($yearminrej)}}</td>
                    <td>{{round($yearavgrej,2)}}</td>
                    <td>{{number_format($TotalYearReject)}}</td>
                </tr>
            </table>
        </div> 
        
        <div class="report-year-title">Yearly Report of Year : {{$year}}</div>

      </div>
      <div class="report-chart-div">

          <canvas id="year-report"></canvas>

          <script>
                            $(function () {
                              /* ChartJS
                              * -------
                              * Here we will create a few charts using ChartJS
                              */

                              //--------------
                              //- BAR CHART -
                              //--------------
                              var arrayproduct = {{@json_encode($YearProduct) }};
                              var arrayrej = {{@json_encode($YearReject) }};

                              // Get context with jQuery - using jQuery's .get() method.
                              var barChartCanvas = $('#year-report').get(0).getContext('2d')

                              var barChartData = {
                                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
                                
                                datasets: [
                                  { 
                                    label               : 'Products',
                                    backgroundColor     : 'green',
                                    borderColor         : 'rgba(60,141,188,0.8)',
                                    pointRadius         : false,
                                    pointColor          : '#3b8bba',
                                    pointStrokeColor    : 'rgba(60,141,188,1)',
                                    pointHighlightFill  : '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                    data                : arrayproduct
                                  },
                                  {
                                    label               : 'Rejects',
                                    backgroundColor     : 'red',
                                    borderColor         : 'rgba(210, 214, 222, 1)',
                                    pointRadius         : false,
                                    pointColor          : 'rgba(210, 214, 222, 1)',
                                    pointStrokeColor    : '#c1c7d1',
                                    pointHighlightFill  : '#fff',
                                    pointHighlightStroke: 'rgba(220,220,220,1)',
                                    data                :arrayrej
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
                                      fontColor:'black',
                                    },
                                  }],
                                  xAxes:[{
                                    ticks:{
                                      fontColor:'black',
                                    },
                                  }],
                                  },
                                title:{
                                  display:true,
                                  text:['Rejects vs Products vs Time','Source:Berger Management System'],
                                  fontSize:18,
                                  fontColor:'black',
                                },
                                subtitle:{
                                  display:true,
                                  text:'subtitle'
                                },
                                legend:{
                                  display:true,
                                  position:'top',
                                  labels:{
                                    fontColor:'black',
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
</body>
</html>