<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\announcemnts;

class announcementsController extends Controller
{
    public function addannounce(Request $request)
    {
        $announce = new announcemnts;
        $announcer = Auth::user()->firstname;
        $announce->Announcement = $request->announce;
        $announce->Announcer = $announcer;
        $query=$announce->save();
        return redirect()->back();
    }
    public function deleteannounce($id){
        $announce=announcemnts::find($id);
        $announce->delete($id);
        return redirect()->back();
    }

    public function editannounce($id){
        $announce=announcemnts::find($id);
        return view('management.editannounce',['announce'=>$announce]);
    }

    public function updateannounce(Request $request){
        $updateannounce = announcemnts::find($request->id);
        $updateannounce->Announcement=$request->editannounce;
        $updateannounce->save();
        return redirect('index');
    }
}
