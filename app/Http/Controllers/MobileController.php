<?php

namespace App\Http\Controllers;

use App\Models\Mobile_curd;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(){
        $mobile_curds = Mobile_curd::latest()->paginate(7);
        return view('products.index',['mobile_curds'=>$mobile_curds]);
    }

    public function create(){
        return view('products.create');
    }

    public function edit($id){
        $mobile_curd = Mobile_curd::where('id',$id)->first();
        return view('products.edit',['mobile_curd'=>$mobile_curd]);
    }

    public function detail($id){
        $mobile_curd = Mobile_curd::where('id',$id)->first();
        return view('products.detail',['mobile_curd'=>$mobile_curd]);
    }

    public function store(Request $request){
        //dd($request);

        $request->validate([
            // form names
            'name'=>'required',
            'model'=>'required',
            'quantity'=>'required|numeric',
            'mrp'=>'required|numeric',
            'dis'=>'required|numeric',
            'des'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'

        ]);

        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('pictures'),$imageName);

        $mobile_curd = new Mobile_curd;
        // database names           form names
        $mobile_curd->image= $imageName;
        $mobile_curd->name= $request->name;
        $mobile_curd->model= $request->model;
        $mobile_curd->quantity= $request->quantity;
        $mobile_curd->mrp= $request->mrp;
        $mobile_curd->dis= $request->dis;
        $mobile_curd->descreption= $request->des;
        $mobile_curd->offered_price= ($request->mrp - (($request->mrp*$request->dis)/100));
        $mobile_curd->save();
        // return back()->withSuccess('Product Detaills Inserted Successfully......');
        // return back()->with('message','Product Detaills Inserted Successfully......');
        return redirect()->back()->with('success', 'Data saved successfully!');
    }  
    
    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'model'=>'required',
            'quantity'=>'required|numeric',
            'mrp'=>'required|numeric',
            'dis'=>'required|numeric',
            'des'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000'

        ]);

        $mobile_curd = Mobile_curd::where('id',$id)->first();

        if(isset($request->image)){
            $imageName=time().".".$request->image->extension();
            $request->image->move(public_path('pictures'),$imageName);
            $mobile_curd->image= $imageName;
        }

        $mobile_curd->name= $request->name;
        $mobile_curd->model= $request->model;
        $mobile_curd->quantity= $request->quantity;
        $mobile_curd->mrp= $request->mrp;
        $mobile_curd->dis= $request->dis;
        $mobile_curd->descreption= $request->des;
        $mobile_curd->offered_price= ($request->mrp - (($request->mrp*$request->dis)/100));
        $mobile_curd->save();
        return back()->withSuccess('Product Detaills Upadated Successfully......');
    }

    public function destroy($id){
        $mobile_curd = Mobile_curd::where('id',$id)->first();
        $mobile_curd->delete();
        return back()->withSuccess('Product Deleted Successfully......');
    }
    
}


