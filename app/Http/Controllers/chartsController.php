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
            }
            $tatalProductRec1 = DB::table('products')->whereYear('created_at', $year)->count();

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
            }
            $tatalRejRec1 = DB::table('rejects')->whereYear('created_at', $year)->count();

        return view('management.charts',compact('RejectRec1','ProductRec1'));
    }
}
