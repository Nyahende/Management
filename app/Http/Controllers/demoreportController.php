<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class demoreportController extends Controller
{
    public function demoreport()
    {
        $YearProduct= [];
        for ($i=1; $i<=12; $i++) {
        $year = 2022;
        $data1 = DB::table('products')
                        ->whereYear('created_at', $year)                  
                        ->whereMonth('created_at', $i)
                        ->sum('Quantity');
        $intdata1 = (int)$data1;
        array_push($YearProduct,$intdata1);
        $yearmaximumpro = max($YearProduct);
        $yearminpro = min($YearProduct);
        $TotalYearProduct = DB::table('products')->whereYear('created_at', $year)->sum('Quantity');
        $yearavgpro = $TotalYearProduct/12;

        }

        $YearReject= [];
        for ($i=1; $i<=12; $i++) {
        $year = 2022;
        $datarej1 = DB::table('rejects')
                        ->whereYear('created_at', $year)                  
                        ->whereMonth('created_at', $i)
                        ->sum('Quantity');
        $intdatarej1 = (int)$datarej1;
        array_push($YearReject,$intdatarej1);
        $yearmaximumrej = max($YearReject);
        $yearminrej = min($YearReject);
        $TotalYearReject = DB::table('rejects')->whereYear('created_at', $year)->sum('Quantity');
        $yearavgrej = $TotalYearReject/12;

        }

        return view('management.demoreport',compact('year','yearavgrej','TotalYearReject','yearminrej','yearmaximumrej','YearReject',
        'yearavgpro','TotalYearProduct','yearminpro','yearmaximumpro','YearProduct'));
    }
}
