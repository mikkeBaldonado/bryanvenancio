<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Validator;
use Auth;

class BlogCategoryController extends Controller
{
    
    public function index()
    {
        $data = BlogCategory::latest()->get();
        $count = 1;

        return view('module.blog_tag.index', compact('data', 'count'));
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->with('alert', 'Please Fill in all required fields');
        }

        BlogCategory::create([
            'title' => $request->title
        ]);

        return back()->with('success', 'Successfully added new blog tag');
    }

    
    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->with('alert', 'Please Fill in all required fields');
        }

        $blog = BlogCategory::findOrFail($id);
        $blog->title = $request->title;
        $blog->save();
        return back()->with('success', 'Successfully updated blog tag');
    }

    
    public function destroy($id)
    {
        $blog = BlogCategory::findOrFail($id);
        $blog->delete();
        return back()->with('success', 'Successfully deleted blog tag');
    }
}
