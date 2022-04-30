<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class chartsController extends Controller
{
    public function charts(Request $request)
    {

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

        return view('management.charts',compact('RejectRec1','avgpro1','year','tatalProductRec1','min1','maximum1','maximumrej1','minrej1','ProductRec1','avgrej1','tatalRejectRec1'));
    }
}
