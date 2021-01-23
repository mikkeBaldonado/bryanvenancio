<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Validator;
use Auth;
use Str;

class LogoController extends Controller
{
    
    public function index()
    {
        $data = Logo::latest()->get();
        $count = 1;
        return view('module.logo.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields');
        }
        if($request->image){
            $destinationPath = public_path().'/uploads/logo';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $request->image = $img;
        }

        Logo::create([
            'title' => $request->title,
            'image' => $request->image,
        ]);

        return back()->with('success', 'Successfully added new logo');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields');
        }

        $port = Logo::findOrFail($id);
        $port->title = $request->title;

        if($request->image){
            $destinationPath = public_path().'/uploads/logo';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $port->image = $img;
        }

        $data = Logo::findOrFail($id);
        $port->save();

        if($request->image and $data->image){
            $destinationPath = public_path().'/uploads/logo/';
            \File::delete($destinationPath.$data->image);
        }

        return back()->with('success', 'Successfully updated logo');
    }

    
    public function destroy($id)
    {
        $data = Logo::findOrFail($id);
        $data->delete();

        if($data->image){
            $destinationPath = public_path().'/uploads/logo/';
            \File::delete($destinationPath.$data->image);
        }
        return back()->with('success', 'Successfully deleted logo');
    }
}
