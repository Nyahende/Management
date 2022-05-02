<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rejects;
use DB;

class rejectsController extends Controller
{
    public function rejects()
    {
        $Reject1 = DB::table('rejects')->where('Reject_Name','=','rej1')->orderBy('id','desc')->get();
        $Reject2 = DB::table('rejects')->where('Reject_Name','=','rej2')->orderBy('id','desc')->get();
        $Reject3 = DB::table('rejects')->where('Reject_Name','=','rej3')->orderBy('id','desc')->get();
        $Reject4 = DB::table('rejects')->where('Reject_Name','=','rej4')->orderBy('id','desc')->get();
        $Reject5 = DB::table('rejects')->where('Reject_Name','=','rej5')->orderBy('id','desc')->get();
        $Reject6 = DB::table('rejects')->where('Reject_Name','=','rej6')->orderBy('id','desc')->get();
        $Reject7 = DB::table('rejects')->where('Reject_Name','=','rej7')->orderBy('id','desc')->get();
        $Reject8 = DB::table('rejects')->where('Reject_Name','=','rej8')->orderBy('id','desc')->get();
        $Reject9 = DB::table('rejects')->where('Reject_Name','=','rej9')->orderBy('id','desc')->get();
        $Reject10 = DB::table('rejects')->where('Reject_Name','=','rej10')->orderBy('id','desc')->get();

        return view('management.rejects',['Reject1'=>$Reject1,'Reject2'=>$Reject2,
        'Reject3'=>$Reject3,'Reject4'=>$Reject4,'Reject5'=>$Reject5,'Reject6'=>$Reject6,
        'Reject7'=>$Reject7,'Reject8'=>$Reject8,'Reject9'=>$Reject9,'Reject10'=>$Reject10]);
    }
    public function addrej1(Request $request)
    {
        $reject1 = new rejects;
        $reject1->Reject_Name=$request->rejectname1;
        $reject1->Quantity=$request->rejectquantity1;
        $reject1->Approval=$request->rejectapp1;
        $query=$reject1->save();
        return redirect()->back()->with('addreject1','You have added Rejects-01 into the Database');
    }
    public function addrej2(Request $request)
    {
        $reject2 = new rejects;
        $reject2->Reject_Name=$request->rejectname2;
        $reject2->Quantity=$request->rejectquantity2;
        $reject2->Approval=$request->rejectapp2;
        $query=$reject2->save();
        return redirect()->back()->with('addreject1','You have added Rejects-02 into the Database');
    }
    public function addrej3(Request $request)
    {
        $reject3 = new rejects;
        $reject3->Reject_Name=$request->rejectname3;
        $reject3->Quantity=$request->rejectquantity3;
        $reject3->Approval=$request->rejectapp3;
        $query=$reject3->save();
        return redirect()->back()->with('addreject1','You have added Rejects-03 into the Database');
    }
    public function addrej4(Request $request)
    {
        $reject4 = new rejects;
        $reject4->Reject_Name=$request->rejectname4;
        $reject4->Quantity=$request->rejectquantity4;
        $reject4->Approval=$request->rejectapp4;
        $query=$reject4->save();
        return redirect()->back()->with('addreject1','You have added Rejects-04 into the Database');
    }
    public function addrej5(Request $request)
    {
        $reject5 = new rejects;
        $reject5->Reject_Name=$request->rejectname5;
        $reject5->Quantity=$request->rejectquantity5;
        $reject5->Approval=$request->rejectapp5;
        $query=$reject5->save();
        return redirect()->back()->with('addreject1','You have added Rejects-05 into the Database');
    }
    public function addrej6(Request $request)
    {
        $reject6 = new rejects;
        $reject6->Reject_Name=$request->rejectname6;
        $reject6->Quantity=$request->rejectquantity6;
        $reject6->Approval=$request->rejectapp6;
        $query=$reject6->save();
        return redirect()->back()->with('addreject1','You have added Rejects-06 into the Database');
    }
    public function addrej7(Request $request)
    {
        $reject7 = new rejects;
        $reject7->Reject_Name=$request->rejectname7;
        $reject7->Quantity=$request->rejectquantity7;
        $reject7->Approval=$request->rejectapp7;
        $query=$reject7->save();
        return redirect()->back()->with('addreject1','You have added Rejects-07 into the Database');
    }
    public function addrej8(Request $request)
    {
        $reject8 = new rejects;
        $reject8->Reject_Name=$request->rejectname8;
        $reject8->Quantity=$request->rejectquantity8;
        $reject8->Approval=$request->rejectapp8;
        $query=$reject8->save();
        return redirect()->back()->with('addreject1','You have added Rejects-08 into the Database');
    }
    public function addrej9(Request $request)
    {
        $reject9 = new rejects;
        $reject9->Reject_Name=$request->rejectname9;
        $reject9->Quantity=$request->rejectquantity9;
        $reject9->Approval=$request->rejectapp9;
        $query=$reject9->save();
        return redirect()->back()->with('addreject1','You have added Rejects-09 into the Database');
    }
    public function addrej10(Request $request)
    {
        $reject10 = new rejects;
        $reject10->Reject_Name=$request->rejectname10;
        $reject10->Quantity=$request->rejectquantity10;
        $reject10->Approval=$request->rejectapp10;
        $query=$reject10->save();
        return redirect()->back()->with('addreject1','You have added Rejects-10 into the Database');
    }
    public function deletereject($id){
        $products=rejects::find($id);
        $products->delete($id);
        return redirect()->back()->with('deletereject','You have deleted a Reject from the Database');
    }
}
