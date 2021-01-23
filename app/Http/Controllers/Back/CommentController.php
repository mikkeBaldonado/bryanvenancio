<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Validator;
use Auth;

class CommentController extends Controller
{
    
    public function index()
    {
        $data = Comment::latest()->get();
        $count = 1;

        return view('module.comment.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'blog_id' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->with('alert', 'Please Fill in all required fields');
        }

        Comment::create([
            'blog_id' => $request->blog_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'You have successfully posted a new comment');
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
        //
    }

    
    public function destroy($id)
    {
        $data = Comment::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Successfully deleted Comment');
    }
}
