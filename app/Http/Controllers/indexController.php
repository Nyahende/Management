<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class indexController extends Controller
{
    public function index()
    {

        $announce = DB::table('announcemnts')->orderBy('id','desc')->get();
        return view('management.index',['announce'=>$announce]);
    }
}
