<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;
use Validator;

class ContactController extends Controller
{
    
    public function index()
    {
        $data = Contact::latest()->get();
        $count = 1;

        return view('module.contact.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        if($validator->fails()){
            return back()->withInput()->with('error', 'Please fill in all required fields');
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);
        return back()->with('message', 'Thank you for Contacting us. We will contact you through your email.');
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
        Contact::findOrFail($id)->delete();
        return back()->with('success', 'Successfully deleted contact');
    }
}
