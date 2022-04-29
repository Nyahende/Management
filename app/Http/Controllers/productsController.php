<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use DB;

class productsController extends Controller
{
    public function products()
    {

        $product1 = DB::table('products')->where('Product_Name','=','satini1')->orderBy('id','desc')->get();
        $product2 = DB::table('products')->where('Product_Name','=','satini2')->orderBy('id','desc')->get();
        $product3 = DB::table('products')->where('Product_Name','=','satini3')->orderBy('id','desc')->get();
        $product4 = DB::table('products')->where('Product_Name','=','satini4')->orderBy('id','desc')->get();
        $product5 = DB::table('products')->where('Product_Name','=','satini5')->orderBy('id','desc')->get();
        $product6 = DB::table('products')->where('Product_Name','=','satini6')->orderBy('id','desc')->get();
        $product7 = DB::table('products')->where('Product_Name','=','satini7')->orderBy('id','desc')->get();
        $product8 = DB::table('products')->where('Product_Name','=','satini8')->orderBy('id','desc')->get();
        $product9 = DB::table('products')->where('Product_Name','=','satini9')->orderBy('id','desc')->get();
        $product10 = DB::table('products')->where('Product_Name','=','satini10')->orderBy('id','desc')->get();

        return view('management.products',['product1'=>$product1,'product2'=>$product2,
        'product3'=>$product3,'product4'=>$product4,'product5'=>$product5,'product6'=>$product6,
        'product7'=>$product7,'product8'=>$product8,'product9'=>$product9,'product10'=>$product10]);
    }
    public function addproduct1(Request $request)
    {
        $product1 = new products;
        $product1->Product_Name=$request->productname1;
        $product1->Quantity=$request->prodctquantity1;
        $product1->Approval=$request->productapp1;
        $query=$product1->save();
        return redirect()->back()->with('addproduct1','You have added Product-01 into the Database');
    }
    public function addproduct2(Request $request)
    {
        $product2 = new products;
        $product2->Product_Name=$request->productname2;
        $product2->Quantity=$request->prodctquantity2;
        $product2->Approval=$request->productapp2;
        $query=$product2->save();
        return redirect()->back()->with('addproduct1','You have added Product-02 into the Database');
    }
    public function addproduct3(Request $request)
    {
        $product3 = new products;
        $product3->Product_Name=$request->productname3;
        $product3->Quantity=$request->prodctquantity3;
        $product3->Approval=$request->productapp3;
        $query=$product3->save();
        return redirect()->back()->with('addproduct1','You have added Product-03 into the Database');
    }
    public function addproduct4(Request $request)
    {
        $product4 = new products;
        $product4->Product_Name=$request->productname4;
        $product4->Quantity=$request->prodctquantity4;
        $product4->Approval=$request->productapp4;
        $query=$product4->save();
        return redirect()->back()->with('addproduct1','You have added Product-04 into the Database');
    }
    public function addproduct5(Request $request)
    {
        $product5 = new products;
        $product5->Product_Name=$request->productname5;
        $product5->Quantity=$request->prodctquantity5;
        $product5->Approval=$request->productapp5;
        $query=$product5->save();
        return redirect()->back()->with('addproduct1','You have added Product-05 into the Database');
    }
    public function addproduct6(Request $request)
    {
        $product6 = new products;
        $product6->Product_Name=$request->productname6;
        $product6->Quantity=$request->prodctquantity6;
        $product6->Approval=$request->productapp6;
        $query=$product6->save();
        return redirect()->back()->with('addproduct1','You have added Product-06 into the Database');
    }
    public function addproduct7(Request $request)
    {
        $product7 = new products;
        $product7->Product_Name=$request->productname7;
        $product7->Quantity=$request->prodctquantity7;
        $product7->Approval=$request->productapp7;
        $query=$product7->save();
        return redirect()->back()->with('addproduct1','You have added Product-07 into the Database');
    }
    public function addproduct8(Request $request)
    {
        $product8 = new products;
        $product8->Product_Name=$request->productname8;
        $product8->Quantity=$request->prodctquantity8;
        $product8->Approval=$request->productapp8;
        $query=$product8->save();
        return redirect()->back()->with('addproduct1','You have added Product-08 into the Database');
    }
    public function addproduct9(Request $request)
    {
        $product9 = new products;
        $product9->Product_Name=$request->productname9;
        $product9->Quantity=$request->prodctquantity9;
        $product9->Approval=$request->productapp9;
        $query=$product9->save();
        return redirect()->back()->with('addproduct1','You have added Product-09 into the Database');
    }
    public function addproduct10(Request $request)
    {
        $product10 = new products;
        $product10->Product_Name=$request->productname10;
        $product10->Quantity=$request->prodctquantity10;
        $product10->Approval=$request->productapp10;
        $query=$product10->save();
        return redirect()->back()->with('addproduct1','You have added Product-10 into the Database');
    }
}
