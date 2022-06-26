<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class chartsController extends Controller
{
    public function charts(Request $request)
    {

//  PRODUCT ONE STARTS HERE



        //PRODUCT ONE MONTHLY 

        $ProductRec1= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data1 = DB::table('products')
                            ->where('Product_Name','=','satini1')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata1 = (int)$data1;
            array_push($ProductRec1,$intdata1);
            $maximum1 = max($ProductRec1);
            $min1 = min($ProductRec1);

            $tatalProductRec1 = DB::table('products')->where('Product_Name','satini1')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro1 = $tatalProductRec1/12;

            }

            $RejectRec1= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej1 = DB::table('rejects')
                            ->where('Reject_Name','=','rej1')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej1 = (int)$datarej1;
            array_push($RejectRec1,$intdatarej1);
            $maximumrej1 = max($RejectRec1);
            $minrej1 = min($RejectRec1);

            $tatalRejectRec1 = DB::table('rejects')->where('Reject_Name','rej1')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej1 = $tatalRejectRec1/12;
            }


            //PRODUCT ONE DAILY


            $dailypro1= [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro1data = DB::table('products')
                              ->where('Product_Name','=','satini1')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro1 = (int)$dailypro1data;
              array_push($dailypro1,$dailyintpro1);
              $dailypromaximum1 = max($dailypro1);
              $dailypromin1= min($dailypro1);
          
              $dailyprototal1 = DB::table('products')->where('Product_Name','=','satini1')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
                $dailyproavg1 = $dailyprototal1/30;
              }
          
          $dailyRej1= [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrej1 = DB::table('rejects')
            ->where('Reject_Name','=','rej1')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej1 = (int)$dailyrej1;
            array_push($dailyRej1,$dailyintrej1);
            $dailymaxrej1 = max($dailyRej1);
            $dailyminrej1 = min($dailyRej1);
          
           $dailytotalrej1 = DB::table('rejects')->where('Reject_Name','=','rej1')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej1 = $dailytotalrej1/30;
            }

// PRODUCT ONE ENDS HERE





//  PRODUCT TWO STARTS HERE




        //PRODUCT TWO MONTHLY 

        $ProductRec2 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data2 = DB::table('products')
                            ->where('Product_Name','=','satini2')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata2 = (int)$data2;
            array_push($ProductRec2,$intdata2);
            $maximum2 = max($ProductRec2);
            $min2 = min($ProductRec2);

            $tatalProductRec2 = DB::table('products')->where('Product_Name','satini2')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro2 = $tatalProductRec2/12;
            }

            $RejectRec2 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej2 = DB::table('rejects')
                            ->where('Reject_Name','=','rej2')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej2 = (int)$datarej2;
            array_push($RejectRec2,$intdatarej2);
            $maximumrej2 = max($RejectRec2);
            $minrej2 = min($RejectRec2);

            $tatalRejectRec2 = DB::table('rejects')->where('Reject_Name','rej2')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej2 = $tatalRejectRec2/12;
            }


            //PRODUCT TWO DAILY


            $dailypro2 = [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro2data = DB::table('products')
                              ->where('Product_Name','=','satini2')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro2 = (int)$dailypro2data;
              array_push($dailypro2,$dailyintpro2);
              $dailypromaximum2 = max($dailypro2);
              $dailypromin2 = min($dailypro2);
          
              $dailyprototal2 = DB::table('products')->where('Product_Name','=','satini2')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
              $dailyproavg2 = $dailyprototal2/30;
              }
          
          $dailyRej2 = [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrej2pro = DB::table('rejects')
            ->where('Reject_Name','=','rej2')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej2 = (int)$dailyrej2pro;
            array_push($dailyRej2,$dailyintrej2);
            $dailymaxrej2 = max($dailyRej2);
            $dailyminrej2 = min($dailyRej2);
          
           $dailytotalrej2 = DB::table('rejects')->where('Reject_Name','=','rej2')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej2 = $dailytotalrej2/30;
            }

// PRODUCT TWO ENDS HERE







//  PRODUCT THREE STARTS HERE



        //PRODUCT THREE MONTHLY 

        $ProductRec3 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data3 = DB::table('products')
                            ->where('Product_Name','=','satini3')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata3 = (int)$data3;
            array_push($ProductRec3,$intdata3);
            $maximum3 = max($ProductRec3);
            $min3 = min($ProductRec3);

            $tatalProductRec3 = DB::table('products')->where('Product_Name','satini3')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro3 = $tatalProductRec3/12;

            }

            $RejectRec3 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej3 = DB::table('rejects')
                            ->where('Reject_Name','=','rej3')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej3 = (int)$datarej3;
            array_push($RejectRec3,$intdatarej3);
            $maximumrej3 = max($RejectRec3);
            $minrej3 = min($RejectRec3);

            $tatalRejectRec3 = DB::table('rejects')->where('Reject_Name','rej3')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej3 = $tatalRejectRec3/12;

            }


            //PRODUCT THREE DAILY


            $dailypro3= [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro3data = DB::table('products')
                              ->where('Product_Name','=','satini3')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro3 = (int)$dailypro3data;
              array_push($dailypro3,$dailyintpro3);
              $dailypromaximum3 = max($dailypro3);
              $dailypromin3 = min($dailypro3);
          
              $dailyprototal3 = DB::table('products')->where('Product_Name','=','satini3')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
              $dailyproavg3 = $dailyprototal3/30;

              }
          
          $dailyRej3 = [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrej3data = DB::table('rejects')
            ->where('Reject_Name','=','rej3')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
            $dailyintrej3 = (int)$dailyrej3data;
            array_push($dailyRej3,$dailyintrej3);
            $dailymaxrej3 = max($dailyRej3);
            $dailyminrej3 = min($dailyRej3);
          
            $dailytotalrej3 = DB::table('rejects')->where('Reject_Name','=','rej3')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej3 = $dailytotalrej3/30;

            }

// PRODUCT THREE ENDS HERE




//  PRODUCT FOUR STARTS HERE



        //PRODUCT FOUR MONTHLY 

        $ProductRec4= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data4 = DB::table('products')
                            ->where('Product_Name','=','satini4')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata4 = (int)$data4;
            array_push($ProductRec4,$intdata4);
            $maximum4 = max($ProductRec4);
            $min4 = min($ProductRec4);

            $tatalProductRec4 = DB::table('products')->where('Product_Name','satini4')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro4 = $tatalProductRec4/12;
            }

            $RejectRec4 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej4 = DB::table('rejects')
                            ->where('Reject_Name','=','rej4')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej4 = (int)$datarej4;
            array_push($RejectRec4,$intdatarej4);
            $maximumrej4 = max($RejectRec1);
            $minrej4 = min($RejectRec4);

            $tatalRejectRec4 = DB::table('rejects')->where('Reject_Name','rej4')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej4 = $tatalRejectRec4/12;
            }


            //PRODUCT FOUR DAILY


            $dailypro4 = [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro4data = DB::table('products')
                              ->where('Product_Name','=','satini4')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro4 = (int)$dailypro4data;
              array_push($dailypro4,$dailyintpro4);
              $dailypromaximum4 = max($dailypro4);
              $dailypromin4 = min($dailypro4);
          
              $dailyprototal4 = DB::table('products')->where('Product_Name','=','satini4')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
              $dailyproavg4 = $dailyprototal4/30;

              }
          
            $dailyRej4 = [];

            for ($i=1; $i<=31; $i++) {
            
            $dailyrej4 = DB::table('rejects')
            ->where('Reject_Name','=','rej4')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej4 = (int)$dailyrej4;
            array_push($dailyRej4,$dailyintrej4);
            $dailymaxrej4 = max($dailyRej4);
            $dailyminrej4 = min($dailyRej4);
          
            $dailytotalrej4 = DB::table('rejects')->where('Reject_Name','=','rej4')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej4 = $dailytotalrej4/30;
            }

// PRODUCT FOUR ENDS HERE




//  PRODUCT FIVE STARTS HERE



        //PRODUCT FIVE MONTHLY 

        $ProductRec5= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data5 = DB::table('products')
                            ->where('Product_Name','=','satini5')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata5 = (int)$data5;
            array_push($ProductRec5,$intdata5);
            $maximum5 = max($ProductRec5);
            $min5 = min($ProductRec5);

            $tatalProductRec5 = DB::table('products')->where('Product_Name','satini5')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro5 = $tatalProductRec5/12;

            }

            $RejectRec5= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej5 = DB::table('rejects')
                            ->where('Reject_Name','=','rej5')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej5 = (int)$datarej5;
            array_push($RejectRec5,$intdatarej5);
            $maximumrej5 = max($RejectRec5);
            $minrej5 = min($RejectRec5);

            $tatalRejectRec5 = DB::table('rejects')->where('Reject_Name','rej5')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej5 = $tatalRejectRec5/12;

            }


            //PRODUCT FIVE DAILY


            $dailypro5 = [];

            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro5data = DB::table('products')
                              ->where('Product_Name','=','satini5')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro5 = (int)$dailypro5data;
              array_push($dailypro5,$dailyintpro5);
              $dailypromaximum5 = max($dailypro5);
              $dailypromin5 = min($dailypro5);
          
              $dailyprototal5 = DB::table('products')->where('Product_Name','=','satini5')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
              $dailyproavg5 = $dailyprototal5/30;
              }
          
          $dailyRej5 = [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrej5 = DB::table('rejects')
            ->where('Reject_Name','=','rej5')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej5 = (int)$dailyrej5;
            array_push($dailyRej5,$dailyintrej5);
            $dailymaxrej5 = max($dailyRej5);
            $dailyminrej5 = min($dailyRej5);
          
            $dailytotalrej5 = DB::table('rejects')->where('Reject_Name','=','rej5')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej5 = $dailytotalrej5/30;

            }

// PRODUCT FIVE ENDS HERE





//  PRODUCT SIX STARTS HERE



        //PRODUCT SIX MONTHLY 

        $ProductRec6= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data6 = DB::table('products')
                            ->where('Product_Name','=','satini6')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata6 = (int)$data6;
            array_push($ProductRec6,$intdata6);
            $maximum6 = max($ProductRec6);
            $min6 = min($ProductRec6);

            $tatalProductRec6 = DB::table('products')->where('Product_Name','satini6')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro6 = $tatalProductRec6/12;
            }

            $RejectRec6 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej6 = DB::table('rejects')
                            ->where('Reject_Name','=','rej6')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej6 = (int)$datarej6;
            array_push($RejectRec6,$intdatarej6);
            $maximumrej6 = max($RejectRec6);
            $minrej6 = min($RejectRec6);

            $tatalRejectRec6 = DB::table('rejects')->where('Reject_Name','rej6')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej6 = $tatalRejectRec6/12;
            }


            //PRODUCT SIX DAILY


            $dailypro6= [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro6data = DB::table('products')
                              ->where('Product_Name','=','satini6')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro6 = (int)$dailypro6data;
              array_push($dailypro6,$dailyintpro6);
              $dailypromaximum6 = max($dailypro6);
              $dailypromin6 = min($dailypro6);
          
              $dailyprototal6 = DB::table('products')->where('Product_Name','=','satini6')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
                $dailyproavg6 = $dailyprototal6/30;
              }
          
          $dailyRej6 = [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrej6 = DB::table('rejects')
            ->where('Reject_Name','=','rej6')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej6 = (int)$dailyrej6;
            array_push($dailyRej6,$dailyintrej6);
            $dailymaxrej6 = max($dailyRej6);
            $dailyminrej6 = min($dailyRej6);
          
            $dailytotalrej6 = DB::table('rejects')->where('Reject_Name','=','rej6')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej6 = $dailytotalrej6/30;

            }

// PRODUCT SIX ENDS HERE




//  PRODUCT SEVEN STARTS HERE



        //PRODUCT SEVEN MONTHLY 

        $ProductRec7= [];
            for ($i=1; $i<=12; $i++) {
            $year = $request->year;
            $data7 = DB::table('products')
                            ->where('Product_Name','=','satini7')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata7 = (int)$data7;
            array_push($ProductRec7,$intdata7);
            $maximum7 = max($ProductRec7);
            $min7 = min($ProductRec7);

            $tatalProductRec7 = DB::table('products')->where('Product_Name','satini7')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro7 = $tatalProductRec7/12;
            }

            $RejectRec7= [];
            for ($i=1; $i<=12; $i++) {
            $year = $request->year;
            $datarej7 = DB::table('rejects')
                            ->where('Reject_Name','=','rej7')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej7 = (int)$datarej7;
            array_push($RejectRec7,$intdatarej7);
            $maximumrej7 = max($RejectRec7);
            $minrej7 = min($RejectRec7);
            $tatalRejectRec7 = DB::table('rejects')->where('Reject_Name','rej7')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej7 = $tatalRejectRec7/12;

            }


            //PRODUCT SEVEN DAILY


            $dailypro7 = [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro7data = DB::table('products')
                              ->where('Product_Name','=','satini7')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro7 = (int)$dailypro7data;
              array_push($dailypro7,$dailyintpro7);
              $dailypromaximum7 = max($dailypro7);
              $dailypromin7 = min($dailypro7);
          
              $dailyprototal7 = DB::table('products')->where('Product_Name','=','satini7')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
                $dailyproavg7 = $dailyprototal7/30;
              }
          
          $dailyRej7= [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrejdata7 = DB::table('rejects')
            ->where('Reject_Name','=','rej7')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej7 = (int)$dailyrejdata7;
            array_push($dailyRej7,$dailyintrej7);
            $dailymaxrej7 = max($dailyRej7);
            $dailyminrej7 = min($dailyRej7);
          
           $dailytotalrej7 = DB::table('rejects')->where('Reject_Name','=','rej7')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej7 = $dailytotalrej7/30;
            }

// PRODUCT SEVEN ENDS HERE





//  PRODUCT EIGHT STARTS HERE



        //PRODUCT EIGHT MONTHLY 

        $ProductRec8 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data8 = DB::table('products')
                            ->where('Product_Name','=','satini8')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata8 = (int)$data8;
            array_push($ProductRec8,$intdata8);
            $maximum8 = max($ProductRec8);
            $min8 = min($ProductRec8);

            $tatalProductRec8 = DB::table('products')->where('Product_Name','satini8')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro8 = $tatalProductRec8/12;
            }

            $RejectRec8 = [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej8 = DB::table('rejects')
                            ->where('Reject_Name','=','rej8')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej8 = (int)$datarej8;
            array_push($RejectRec8,$intdatarej8);
            $maximumrej8 = max($RejectRec8);
            $minrej8 = min($RejectRec8);

            $tatalRejectRec8 = DB::table('rejects')->where('Reject_Name','rej8')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej8 = $tatalRejectRec8/12;
            }


            //PRODUCT EIGHT DAILY


            $dailypro8= [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro8data = DB::table('products')
                              ->where('Product_Name','=','satini8')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro8 = (int)$dailypro8data;
              array_push($dailypro8,$dailyintpro8);
              $dailypromaximum8 = max($dailypro8);
              $dailypromin8 = min($dailypro8);
          
              $dailyprototal8 = DB::table('products')->where('Product_Name','=','satini8')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
                $dailyproavg8 = $dailyprototal8/30;
              }
          
          $dailyRej8= [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrejdata8 = DB::table('rejects')
            ->where('Reject_Name','=','rej8')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej8 = (int)$dailyrejdata8;
            array_push($dailyRej8,$dailyintrej8);
            $dailymaxrej8 = max($dailyRej8);
            $dailyminrej8 = min($dailyRej8);
          
           $dailytotalrej8 = DB::table('rejects')->where('Reject_Name','=','rej8')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej8 = $dailytotalrej8/30;
            }

// PRODUCT EIGHT ENDS HERE





//  PRODUCT NINE STARTS HERE



        //PRODUCT NINE MONTHLY 

        $ProductRec9= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $data9 = DB::table('products')
                            ->where('Product_Name','=','satini9')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata9 = (int)$data9;
            array_push($ProductRec9,$intdata9);
            $maximum9 = max($ProductRec9);
            $min9 = min($ProductRec9);

            $tatalProductRec9 = DB::table('products')->where('Product_Name','satini9')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro9 = $tatalProductRec9/12;
            }

            $RejectRec9= [];

            for ($i=1; $i<=12; $i++) {

            $year = $request->year;

            $datarej9 = DB::table('rejects')
                            ->where('Reject_Name','=','rej9')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej9 = (int)$datarej9;
            array_push($RejectRec9,$intdatarej9);
            $maximumrej9 = max($RejectRec9);
            $minrej9 = min($RejectRec9);

            $tatalRejectRec9 = DB::table('rejects')->where('Reject_Name','rej9')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej9 = $tatalRejectRec9/12;
            }


            //PRODUCT NINE DAILY


            $dailypro9 = [];

            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro9data = DB::table('products')
                              ->where('Product_Name','=','satini9')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
              $dailyintpro9 = (int)$dailypro9data;
              array_push($dailypro9,$dailyintpro9);
              $dailypromaximum9 = max($dailypro9);
              $dailypromin9 = min($dailypro9);
          
              $dailyprototal9 = DB::table('products')->where('Product_Name','=','satini9')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
              $dailyproavg9 = $dailyprototal9/30;
              
              }
          
          $dailyRej9 = [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrejdata9 = DB::table('rejects')
            ->where('Reject_Name','=','rej9')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej9 = (int)$dailyrejdata9;
            array_push($dailyRej9,$dailyintrej9);
            $dailymaxrej9 = max($dailyRej9);
            $dailyminrej9 = min($dailyRej9);
          
             $dailytotalrej9 = DB::table('rejects')->where('Reject_Name','=','rej9')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej9 = $dailytotalrej9/30;
            }


//   PRODUCT NINE ENDS HERE





// PRODUCT TEN STARTS HERE



    //PRODUCT TEN MONTHLY

        $ProductRec10  = [];
            for ($i=1; $i<=12; $i++) {
            $year = $request->year;
            $data10 = DB::table('products')
                            ->where('Product_Name','=','satini10')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdata10 = (int)$data10;
            array_push($ProductRec10,$intdata10);
            $maximum10 = max($ProductRec10);
            $min10 = min($ProductRec10);
            $tatalProductRec10 = DB::table('products')->where('Product_Name','satini10')->whereYear('created_at', $year)->sum('Quantity');
            $avgpro10 = $tatalProductRec10/12;
            }

            $RejectRec10 = [];
            for ($i=1; $i<=12; $i++) {
            $year = $request->year;
            $datarej10 = DB::table('rejects')
                            ->where('Reject_Name','=','rej10')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
            $intdatarej10 = (int)$datarej10;
            array_push($RejectRec10,$intdatarej10);
            $maximumrej10 = max($RejectRec10);
            $minrej10 = min($RejectRec10);
            $tatalRejectRec10 = DB::table('rejects')->where('Reject_Name','rej10')->whereYear('created_at', $year)->sum('Quantity');
            $avgrej10 = $tatalRejectRec10/12;
            }


            //PRODUCT TEN DAILY


            $dailypro10= [];
            for ($i=1; $i<=31; $i++) {
          
              $year = $request->year;
              $month = $request->month;
              $dailypro10data = DB::table('products')
                              ->where('Product_Name','=','satini10')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $month)
                              ->whereDay('created_at', $i)
                              ->sum('Quantity');
                $dailyintpro10 = (int)$dailypro10data;
              array_push($dailypro10,$dailyintpro10);
              $dailypromaximum10 = max($dailypro10);
              $dailypromin10= min($dailypro10);
          
              $dailyprototal10 = DB::table('products')->where('Product_Name','=','satini10')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
                $dailyproavg10 = $dailyprototal10/30;
              }
          
          $dailyRej10= [];
          for ($i=1; $i<=31; $i++) {
            
            $dailyrejdata10 = DB::table('rejects')
            ->where('Reject_Name','=','rej10')
            ->whereYear('created_at', $year)                  
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->sum('Quantity');
              $dailyintrej10 = (int)$dailyrejdata10;
            array_push($dailyRej10,$dailyintrej10);
            $dailymaxrej10 = max($dailyRej10);
            $dailyminrej10 = min($dailyRej10);
          
           $dailytotalrej10 = DB::table('rejects')->where('Reject_Name','=','rej10')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
            $dailyavgrej10 = $dailytotalrej10/30;
            }

// PRODUCT TEN ENDS HERE

        return view('management.charts',compact('RejectRec9','dailyRej8','tatalProductRec9','avgpro9','min9','dailytotalrej8','dailyavgrej8','dailymaxrej8','dailyminrej8','avgrej10','tatalRejectRec10','minrej10','maximumrej10','RejectRec10','avgpro10','tatalProductRec10','min10',
        'maximum10','ProductRec10','dailyavgrej9','dailytotalrej9','dailyminrej9','dailymaxrej9','dailyRej9','dailyproavg9','dailyprototal9','dailypromin9',
        'dailypromaximum9','dailypro9','avgrej8','tatalRejectRec8','minrej8','maximumrej8','datarej8','RejectRec8','avgpro8','tatalProductRec8','min8','maximum8',
        'ProductRec8','dailyavgrej2','dailytotalrej2','dailyminrej2','dailymaxrej2','dailyRej2','dailyproavg2','dailyprototal2','dailypromin2','dailypromaximum2',
        'dailypro2','avgrej2','tatalRejectRec2','minrej2','maximumrej2','RejectRec2','avgpro2','tatalProductRec2','min2','maximum2','ProductRec2','dailyavgrej3',
        'dailytotalrej3','dailyminrej3','dailymaxrej3','dailyRej3','dailyproavg3','dailyprototal3','dailypromin3','dailypromaximum3','dailypro3','avgrej3',
        'tatalRejectRec3','minrej3','maximumrej3','RejectRec3','avgpro3','tatalProductRec3','min3','maximum3','ProductRec3','dailyavgrej4','dailytotalrej4',
        'dailyminrej4','dailymaxrej4','dailyRej4','dailyproavg4','dailyprototal4','dailypromin4','dailypromaximum4','dailypro4','avgrej4','tatalRejectRec4',
        'minrej4','maximumrej4','RejectRec4','avgpro4','tatalProductRec4','min4','maximum4','ProductRec4','dailyavgrej5','dailytotalrej5','dailyminrej5','dailymaxrej5',
        'dailyrej5','dailyRej5','dailyproavg5','dailyprototal5','dailypromin5','dailypromaximum5','dailypro5','avgrej5','tatalRejectRec5','minrej5','maximumrej5',
        'RejectRec5','avgpro5','tatalProductRec5','min5','maximum5','ProductRec5','dailyavgrej6','dailytotalrej6','dailyminrej6','dailymaxrej6','dailyRej6','dailyproavg6',
        'dailyprototal6','dailypromin6','dailypromaximum6','dailypro6','avgrej6','tatalRejectRec6','minrej6','maximumrej6','RejectRec6','avgpro6','tatalProductRec6',
        'min6','maximum6','ProductRec6','avgrej7','tatalRejectRec7','minrej7','maximumrej7','RejectRec7','avgpro7','tatalProductRec7','min7','maximum7','ProductRec7',
        'dailyavgrej7','dailytotalrej7','dailyminrej7','dailymaxrej7','dailyRej7','dailyproavg7','dailyprototal7','dailypromin7','dailypromaximum7','dailypro7',
        'dailyproavg8','dailyprototal8','dailypromin8','dailypromaximum8','dailypro8','avgrej9','tatalRejectRec9','minrej9','maximumrej9','ProductRec9','dailyavgrej10',
        'dailytotalrej10','dailyRej10','dailymaxrej10','dailyminrej10','dailytotalrej1','dailyproavg10',
        'dailyprototal10','dailypromin10','dailypromaximum10','dailypro10','month','dailyproavg1','dailypro1','dailypromaximum1','dailypromin1','dailyprototal1',
        'dailyRej1','dailymaxrej1','dailyminrej1','RejectRec1','dailyavgrej1','avgpro1','year','tatalProductRec1','min1','maximum1','maximumrej1','minrej1',
        'ProductRec1','avgrej1','tatalRejectRec1'));
    }
}
