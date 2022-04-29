<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\announcemnts;

class announcementsController extends Controller
{
    public function addannounce(Request $request)
    {
        $announce = new announcemnts;
        $announcer = Auth::user()->username();
        $announce->Announcement = $request->announce;
        $announce->Announcer = $announcer;
        $query=$announce->save();
        return redirect()->back();
    }
}
