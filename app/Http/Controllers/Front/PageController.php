<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\BlogCategory;
use Spatie\Searchable\Search;
use Str;

class PageController extends Controller
{
    public function about(){
    	return view('front.about');
    }

    public function portfolio(){
    	return view('front.portfolio');
    }

    public function contact(){
    	return view('front.contact');
    }

    public function blog(){
    	return view('front.blog');
    }

    public function blog_detail($id, $title){
        $blog = Blog::findOrFail($id);
        $previous = Blog::where('id', '<', $blog->id)->max('id');
        $next = Blog::where('id', '>', $blog->id)->min('id');
    	return view('front.blog-detail', compact('blog', 'next', 'previous'));
    }

    public function load_portfolio(Request $request){
        $data = Portfolio::latest()
              ->skip($request->rowCount)
              ->take(4)
              ->get();

        $countValue = $request->rowCount + 4;
        $output = '';
        $tag_name = ''; 
        
        foreach($data as $row){
            $output .= '
                        <div class="col-md-6 work_item">
                            <div class="latest_work_item">
                                <img src="'. asset('uploads/portfolio/'.$row->image).'" alt="lt-w">
                                <div class="l_work_hover">
                                    <h6>
                                        <span>
                                            '.$row->category->title.'
                                        </span>
                                    </h6>
                                    <h4>'. $row->title .'</h4>
                                </div>
                            </div>
                        </div>
                    ';
        }
        return [
            '1' => $output,
            '2' => $countValue
        ];
    }

    public function load_blog(Request $request){
        $data = Blog::latest()
              ->skip($request->rowCount)
              ->take(4)
              ->get();

        $countValue = $request->rowCount + 4;
        $output = '';
        $tag_name = ''; 
        $position = 1;

        foreach($data as $row){
            // foreach(App\Models\BlogCategory::all() as $tag){
            //     if(in_array($tag->id, json_decode($row->tags))){
            //         $tag_name = $tag->title;
            //     }
            // }
            if($position == 1){
                $output .= '
                            <div class="col-sm-6 lt-item">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="'. asset('uploads/blogs/'.$row->image) .'" class="img-fluid" id="blog_img" alt="">
                                    </div>
                                    <div class="media-body mt-auto">
                                        <h6 class="title-tag">
                                            '.$tag_name.'
                                        </h6>
                                        <a href="'. url('blog_detail/'.$row->id.'/'.str_replace(' ', '_', $row->title)) .'"">
                                            <h3>'. Str::limit($row->title, 50) .'</h3>
                                        </a>
                                        <div>
                                            '. Str::limit($row->description, 100) .'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                $position = 2;
            }else{
                $output .= '
                            <div class="col-sm-6 lt-item lt-item-pad">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="'. asset('uploads/blogs/'.$row->image) .'" class="img-fluid" id="blog_img" alt="">
                                    </div>
                                    <div class="media-body mt-auto">
                                        <h6 class="title-tag">
                                            '.$tag_name.'
                                        </h6>
                                        <a href="'. url('blog_detail/'.$row->id.'/'.str_replace(' ', '_', $row->title)) .'"">
                                            <h3>'. Str::limit($row->title, 50) .'</h3>
                                        </a>
                                        <div>
                                            '. Str::limit($row->description, 100) .'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                $position = 1;
            }
        }
        return [
            '1' => $output,
            '2' => $countValue
        ];
    }

    public function search(Request $request){
        $searchResults = (new Search())
           ->registerModel(Blog::class, 'title', 'location', 'blog_date', 'description', 'author', 'description_2')
           ->search($request->keyword);

           $keyword = $request->keyword;
        return view('front.search', compact('searchResults', 'keyword'));
    }
}
