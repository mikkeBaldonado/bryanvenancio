<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Validator;
use Auth;
use Str;

class BlogController extends Controller
{
    
    public function index()
    {
        $data = Blog::latest()->get();
        $count = 1;
        return view('module.blog.index', compact('data', 'count'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        // 'title', 'image', 'more_images' , 'location', 'blog_date', 'author', 'description', 'description_2', 'tags'
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'location' => 'required',
            'author' => 'required',
            'blog_date' => 'required',
            'description' => 'required',
            'description_2' => 'required',
            'tags' => 'required',
        ]);
        // return back()->withInput();
        // return json_encode($request->tags);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields and follow image dimensions and file size.');
        }
        if($request->image){
            $valid = Validator::make($request->all(),[
                'image' => 'dimensions:width=1170,height=533',
            ]);
            if($valid->fails()){
                return back()->withInput()->with('alert','Please make sure your image dimension is (1170 x 533) and should be less than 1mb');
            }
            $destinationPath = public_path().'/uploads/blogs';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $request->image = $img;
        }

        if($request->more_images){
            $image_validator = Validator::make($request->all(),[
                'more_images' => 'required',
                'more_images.*' => 'dimensions:width=582,height=608'
            ]);
            if($image_validator->fails()){
                return back()->withInput($request->input())->with('alert','Please make sure your image dimension is (582 x 608)');
            }
            $file = $request->file('more_images');
            $profile_ar = array();
            $destinationPath = public_path().'/uploads/blogs';
            foreach ($file as $key) {
                $filepro = 'more-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$key->getClientOriginalExtension();
                $key->move($destinationPath,$filepro);
                $profile_ar[] = $filepro;
            }
            $request->more_images = json_encode($profile_ar);
        }

        Blog::create([
            'title' => $request->title,
            'location' => $request->location,
            'author' => $request->author,
            'blog_date' => $request->blog_date,
            'description' => $request->description,
            'description_2' => $request->description_2,
            'tags' => json_encode($request->tags),
            'image' => $request->image,
            'more_images' => $request->more_images,
        ]);

        return back()->with('success', 'Successfully added new blog news');
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
        $description = 'description'.$id;
        $description_2 = 'description_2'.$id;

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'location' => 'required',
            'author' => 'required',
            'blog_date' => 'required',
            $description => 'required',
            $description_2 => 'required',
            'tags' => 'required',
        ]);
        // return back()->withInput();
        // return json_encode($request->tags);
        if($validator->fails()){
            return back()->withInput()->with('alert','Please make sure to fill in all required fields and follow image dimensions and file size.');
        }

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->location = $request->location;
        $blog->author = $request->author;
        $blog->blog_date = $request->blog_date;
        $blog->tags = json_encode($request->tags);
        $blog->description = $request->$description;
        $blog->description_2 = $request->$description_2;

        if($request->image){
            $valid = Validator::make($request->all(),[
                'image' => 'dimensions:width=1170,height=533',
            ]);
            if($valid->fails()){
                return back()->withInput()->with('alert','Please make sure your image dimension is (1170 x 533) and should be less than 1mb');
            }
            $destinationPath = public_path().'/uploads/blogs';
            $img = 'image-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$request->image->getClientOriginalExtension();
            $request->image->move($destinationPath,$img);
            $blog->image = $img;
        }

        if($request->more_images){
            $image_validator = Validator::make($request->all(),[
                'more_images' => 'required',
                'more_images.*' => 'dimensions:width=582,height=608'
            ]);
            if($image_validator->fails()){
                return back()->withInput($request->input())->with('alert','Please make sure your image dimension is (582 x 608)');
            }
            $file = $request->file('more_images');
            $profile_ar = array();
            $destinationPath = public_path().'/uploads/blogs';
            foreach ($file as $key) {
                $filepro = 'more-'.date_format(date_create(), 'mdyHis').Str::random(5).'.'.$key->getClientOriginalExtension();
                $key->move($destinationPath,$filepro);
                $profile_ar[] = $filepro;
            }
            $blog->more_images = json_encode($profile_ar);
        }

        $data = Blog::findOrFail($id);
        $blog->save();

        if($request->image and $data->image){
            $destinationPath = public_path().'/uploads/blogs/';
            \File::delete($destinationPath.$data->image);
        }
        if($request->more_images and $data->more_images){
            $destinationPath = public_path().'/uploads/blogs/';
            foreach (json_decode($data->more_images) as $value) {
                \File::delete($destinationPath.$value);
            }
        }

        return back()->with('success', 'Successfully updated blog news');
    }

    
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        $data->delete();

        if($data->image){
            $destinationPath = public_path().'/uploads/blogs/';
            \File::delete($destinationPath.$data->image);
        }
        if($data->more_images){
            $destinationPath = public_path().'/uploads/blogs/';
            foreach (json_decode($data->more_images) as $value) {
                \File::delete($destinationPath.$value);
            }
        }

        return back()->with('success', 'Successfully deleted blog news');
    }
}
