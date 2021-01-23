<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use Validator;
use Auth;
use Str;

class PortfolioCategoryController extends Controller
{
    
    public function index()
    {
        $data = PortfolioCategory::latest()->get();
        $count = 1;
        return view('module.portfolio_category.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->with('alert', 'Please Fill in all required fields');
        }

        PortfolioCategory::create([
            'title' => $request->title
        ]);

        return back()->with('success', 'Successfully added new category');
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
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->with('alert', 'Please Fill in all required fields');
        }

        $blog = PortfolioCategory::findOrFail($id);
        $blog->title = $request->title;
        $blog->save();
        return back()->with('success', 'Successfully updated category');
    }

    
    public function destroy($id)
    {
        $blog = PortfolioCategory::findOrFail($id);
        $blog->delete();
        return back()->with('success', 'Successfully deleted category');
    }
}
