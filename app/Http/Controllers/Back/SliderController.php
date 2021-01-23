<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Validator;
use Auth;
use Str;

class SliderController extends Controller
{
    
    public function index()
    {
        $data = Slider::latest()->get();
        $count = 1;
        return view('module.slider.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'tag' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields and follow image dimensions and file size.');
        }
        if($request->image){
            $valid = Validator::make($request->all(),[
                'image' => 'dimensions:width=1845,height=773',
            ]);
            if($valid->fails()){
                return back()->withInput()->with('alert','Please make sure your image dimension is (1845 x 773) and should be less than 1mb');
            }
            $destinationPath = public_path().'/uploads/slider';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $request->image = $img;
        }

        Slider::create([
            'title' => $request->title,
            'tag' => $request->tag,
            'image' => $request->image,
        ]);

        return back()->with('success', 'Successfully added new slider');
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
            'tag' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields');
        }

        $port = Slider::findOrFail($id);
        $port->title = $request->title;
        $port->tag = $request->tag;

        if($request->image){
            $valid = Validator::make($request->all(),[
                'image' => 'dimensions:width=1845,height=773',
            ]);
            if($valid->fails()){
                return back()->withInput()->with('alert','Please make sure your image dimension is (1845 x 773) and should be less than 1mb');
            }
            $destinationPath = public_path().'/uploads/slider';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $port->image = $img;
        }

        $data = Slider::findOrFail($id);
        $port->save();

        if($request->image and $data->image){
            $destinationPath = public_path().'/uploads/slider/';
            \File::delete($destinationPath.$data->image);
        }

        return back()->with('success', 'Successfully updated slider');
    }

    
    public function destroy($id)
    {
        $data = Slider::findOrFail($id);
        $data->delete();

        if($data->image){
            $destinationPath = public_path().'/uploads/slider/';
            \File::delete($destinationPath.$data->image);
        }
        return back()->with('success', 'Successfully deleted slider');
    }
}
