<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Validator;
use Auth;
use Str;

class PortfolioController extends Controller
{
    
    public function index()
    {
        $data = Portfolio::latest()->get();
        $count = 1;
        return view('module.portfolio.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'tags' => 'required',
            'caption' => 'required',
            'location' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields and follow image dimensions and file size.');
        }
        if($request->image){
            $valid = Validator::make($request->all(),[
                'image' => 'dimensions:width=575,height=366',
            ]);
            if($valid->fails()){
                return back()->withInput()->with('alert','Please make sure your image dimension is (575 x 366) and should be less than 1mb');
            }
            $destinationPath = public_path().'/uploads/portfolio';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $request->image = $img;
        }

        Portfolio::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'tags' => json_encode($request->tags),
            'image' => $request->image,
            'caption' => $request->caption,
            'location' => $request->location,
        ]);

        return back()->with('success', 'Successfully added new portfolio');
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
            // 'tags' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields and follow image dimensions and file size.');
        }

        $port = Portfolio::findOrFail($id);
        $port->title = $request->title;
        $port->category_id = $request->category_id;
        $port->caption = $request->caption;
        $port->location = $request->location;
        $port->tags = json_encode($request->tags);
        
        if($request->image){
            $valid = Validator::make($request->all(),[
                'image' => 'dimensions:width=575,height=366',
            ]);
            if($valid->fails()){
                return back()->withInput()->with('alert','Please make sure your image dimension is (575 x 366) and should be less than 1mb');
            }
            $destinationPath = public_path().'/uploads/portfolio';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $port->image = $img;
        }

        $data = Portfolio::findOrFail($id);
        $port->save();

        if($request->image and $data->image){
            $destinationPath = public_path().'/uploads/portfolio/';
            \File::delete($destinationPath.$data->image);
        }

        return back()->with('success', 'Successfully updated portfolio');
    }

    
    public function destroy($id)
    {
        $data = Portfolio::findOrFail($id);
        $data->delete();

        if($data->image){
            $destinationPath = public_path().'/uploads/portfolio/';
            \File::delete($destinationPath.$data->image);
        }
        return back()->with('success', 'Successfully deleted portfolio');
    }
}
