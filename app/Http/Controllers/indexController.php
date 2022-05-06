<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;


class indexController extends Controller
{
    public function index()
    {

        $announce = DB::table('announcemnts')->orderBy('id','desc')->get();
        return view('management.index',['announce'=>$announce]);
    }
    public function profilepicture($id){
        $profilepicture=user::find($id);
      
        return view('management.profilepicture',['profilepicture'=>$profilepicture]);
    }
    public function updateprofile(Request $request)
    {
        $updateprofile=user::find($request->id);
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalName();
        $request->file->move('assets',$filename);
        $updateprofile->file=$filename;
        $updateprofile->save();
        return redirect('index');
    }
}
