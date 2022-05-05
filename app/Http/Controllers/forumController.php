<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forum;
use DB;

class forumController extends Controller
{
    public function forum()
    {

        $alltexts = DB::table('forums')->orderBy('id','desc')->get();
        return view('management.forum',compact('alltexts'));
    }

    public function addtext(Request $request)
    {
      $text = new forum;
      $sender_name = "Michael";
      $text->sender_name=$sender_name;
      $text->body=$request->body;
      $text->save();
    //   return response()->json([
    //       'success'=>'A text added'
    //   ]);
    return redirect()->back();
    }

    public function fetchtexts()
    {
        $thetexts = DB::table('forums')->orderBy('id','desc')->get();
        return response()->json([
               'thetexts'=>$thetexts,
        ]);

    }
}
