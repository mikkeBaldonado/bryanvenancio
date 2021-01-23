@extends('layouts.front.app')
@section('meta')
    <title>{{ $blog->title }} | Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
    
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f840f359798460012e64c5d&product=sop' async='async'></script>
@endsection
@section('content')
	<section class="blog-details-area full_pad nav-space pt-0">
        <div class="blog-details-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 single-blog">
                        <div class="blog_details_content">
                            <div class="sec-title blog-title">
                                <h6><span>in</span> {{ $blog->location }}</h6>
                                <h2>{{ $blog->title }}</h2>
                                <a href="#">{{ date('M j, Y', strtotime($blog->blog_date)) }}</a>
                                {{-- <a href="#">2 Comments</a> --}}
                                <a href="#">{{ $blog->author }}</a>
                            </div>
                            {{-- <img class="img-fluid" src="{{ asset('images/blog-details/1.jpg') }}" alt=""> --}}
                            <img class="img-fluid" src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 single-blog">
                        {!! $blog->description !!}

                    	{{-- <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 about-text">
                                        <p>Photographers tend not to photograph what they can’t see, which is the very reason one should try to attempt it. Otherwise we’re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that's just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>
                                        <p>He was right. John Loengard, the picture editor at Life, always used to tell me, ”If you want something to look interesting, don’t light all of it.Taking pictures is savoring life intensely, every hundredth of a second. For me, the camera is a sketch book, an instrument of the best intuitions.</p>
                                    </div>
                                    <div class="col-sm-6 about-text">
                                        <p>Photography is a magical kind of art that allows people to preserve time and moments, and to describe the world the way they see it and loves.</p>
                                        <p>For me, the subject of the picture is always more important than the picture. A photograph is a click away. A good photographer is a hundred clicks away and a better one, a thousand clicks away for photography love photos and we make.</p>
                                        <p>I am a professional photographer by trade and an amateur photographer by vocation. If only I had thought of a Kodak! I could have flashed that glimpse of the Under-world in a second, and examined for more best and nice photographers.</p>
                                        <p>Women that can work a camera with ease often work men just as effortlessly for both require the same commitment to vanity and manipulations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 my-auto">
                                <div class="blog-mg">
                                    <img src="{{ asset('images/blog-details/2.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-sm-12 masonry-slide-area pb-4">
                    	<div class="row blog-slidshow">
                           {{--  <div class="col-sm-3 col-12 slidshow-item">
			                    <img src="{{ asset('images/about-page/mas-g1.jpg') }}" class="img-fluid" alt="">
			                </div> --}}
			                <div class="col-sm-6 col-12 mx-auto slidshow-item">
			                    <div class="bl-slider owl-carousel">
                                    @foreach(json_decode($blog->more_images) as $pic)
			                        <div class="item">
			                            <img src="{{ asset('uploads/blogs/'.$pic) }}" class="img-fluid" id="bd_img" alt="">
			                        </div>
                                    @endforeach
			                        {{-- <div class="item">
			                            <img src="{{ asset('images/blog-details/slideshow-2.jpg') }}" alt="">
			                        </div>
			                        <div class="item">
			                            <img src="{{ asset('images/blog-details/slideshow-5.jpg') }}" alt="">
			                        </div> --}}
			                    </div>
			                </div>
				            {{-- <div class="col-sm-3 col-12">
					            <div class="row">
					            	<div class="col-sm-12 col-6 slidshow-item">
					                    <img src="{{ asset('images/about-page/mas-g3.jpg') }}" alt="">
					            	</div>
					            	<div class="col-sm-12 col-6 slidshow-item">
					                    <img src="{{ asset('images/about-page/mas-g4.jpg') }}" alt="">
					            	</div>
					            </div>	
			                </div> --}}
                        </div>
                    </div>
                    <div class="col-sm-12 single-blog">
                    	<div class="blog-text">
                            {!! $blog->description_2 !!}
                            {{-- <p>It is a cruel, ironical art, photography. The dragging of captured moments into the future; moments that should have been allowed to be evaporate into the past; should exist only in memories, glimpsed through the fog of events that came after. Photographs force us to see people before their future weighed them down... A portrait is not a likeness. The moment an emotion or fact is transformed into a photograph it is no longer a fact but an opinion. There is no such thing as inaccuracy in a photograph. All photographs are accurate. None of them is the truth.  No matter how much crap you gotta plow through to stay alive as a photographer, no matter how many bad assignments, bad days, bad clients, snotty subjects, obnoxious handlers, wigged-out art directors, technical disasters, failures of the mind, body, and will, all the shouldas, couldas, and wouldas that befuddle our brains and creep into our dreams, always remember to make room to shoot what you love. It’s the only way to keep your heart beating as a photographer.</p>
                            <p>For me the noise of Time is not sad: I love bells, clocks, watches — and I recall that at first photographic implements were related to techniques of cabinetmaking and the machinery of precision: cameras, in short, were clocks for seeing, and perhaps in me someone very old still hears in the photographic mechanism the living sound of the wood. I don't just look at the thing itself or at the reality itself; I look around the edges for those little askew moments-kind of like what makes up our lives-those slightly awkward, lovely moments.</p>
                            <div class="blog_quote">
                                <p>In an initial period, Photography, in order to surprise, photographs the notable; but soon, by a familiar reversal, it decrees notable whatever it photographs. The 'anything whatever' then becomes the sophisticated acme of value.</p>
                            </div>
                            <p>You only have to start saying of something : 'Ah, how beautiful ! We must photograph it !' and you are already close to the view of the person who thinks that everything that is not photographed is lost, as if it never existed, and therefore in order to really live you must photograph as much as you can, and to photograph as much as you can you must either live in the most photographable way possible, or else consider photographable every moment of your life.</p> --}}
                        </div>
                    </div>
                    <div class="col-xl-12 single-blog">
                    	<div class="row m0 post_author">
                            <div class="col-xl-12 posts-social">
                                <div class="tags">
                                    Tags:
                                    @foreach(App\Models\BlogCategory::all() as $tag)
                                    @if(in_array($tag->id, json_decode($blog->tags)))
                                    <a href="#">{{ $tag->title }}</a>
                                    @endif
                                    @endforeach 
                                </div>
                                <ul class="siocial-l">
                                    {{-- <li><i class="fa fa-heart-o"></i>7</li> --}}
                                    <li>
                                        <a href="#" data-network="sharethis" class="st-custom-button text-dark">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-network="facebook" class="st-custom-button text-dark">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        {{-- <a href="#" data-network="facebook">
                                            <i class="fab fa-facebook-square"></i>
                                        </a> --}}
                                    </li>
                                    <li>
                                        <a href="#" data-network="twitter" class="st-custom-button text-dark">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    {{-- <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li> --}}
                                </ul>
                            </div>
                            {{-- <div class="media author-bio">
                                <div class="media-left">
                                    <a href="#">
                                    	<img src="{{ asset('images/blog-details/author1.png') }}" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4><a href="#">Adrian Cusnir</a></h4>
                                    <p>A photograph of a woman crying tells me nothing about grief. Or a photograph of a woman ecstatic tells me nothing about ecstasy</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
	                        <div class="col-xl-12 p-0">
	                        	<div class="row m0 post-pagination">
                                    @if(!$previous)
                                    <div class="col-sm-6 pagination-item pull-left">
                                    </div>
                                    @else
                                    @foreach(App\Models\Blog::latest()->where('id',$previous)->get() as $value)
	                                <div class="col-sm-6 pagination-item pull-left">
	                                    <h2>{{ Str::limit($value->title, 50) }}</h2>
	                                    <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                            <i class="fa fa-angle-double-left"></i>
                                            PREVIOUS POST
                                        </a>
	                                </div>
                                    @endforeach
                                    @endif
                                    @if(!$next)
                                    <div class="col-sm-6 pagination-item pull-right text-right">
                                    </div>
                                    @else
                                    @foreach(App\Models\Blog::latest()->where('id',$next)->get() as $value)
	                                <div class="col-sm-6 pagination-item pull-right text-right">
                                        <h2>{{ Str::limit($value->title, 50) }}</h2>
	                                    <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                            Next POST
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
	                                </div>
                                    @endforeach
                                    @endif
	                            </div>
	                        </div>
                        </div>
                    </div>
                    <div class="col-sm-12 single-blog">
                    	<h2 class="r_post_title">You may also like</h2>
                        <div class="row latest_work_inner">
                            @foreach(App\Models\Blog::latest()->where('id','!=',$blog->id)->limit(2)->get() as $value)
                            <div class="col-md-6 work_item">
                                <div class="latest_work_item">
                                    <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                    	<img src="{{ asset('uploads/blogs/'.$value->image) }}" alt="lt-w">
                                    </a>
                                    <div class="l_work_hover">
                                        <h6>
                                            <span>
                                            @foreach(App\Models\BlogCategory::all() as $tag)
                                            @if(in_array($tag->id, json_decode($blog->tags)))
                                            {{ $tag->title }},
                                            @endif
                                            @endforeach
                                            </span>
                                        </h6>
                                        <h4>{{ Str::limit($value->title, 50) }}</h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="col-md-6 work_item">
                                <div class="latest_work_item">
                                    <a href="#">
                                    	<img src="{{ asset('images/latest_work-2.jpg') }}" alt="lt-w">
                                    </a>
                                    <div class="l_work_hover">
                                        <h6><span>Lifestyle</span></h6>
                                        <h4>Taking pictures is savoring life intensely, every hun...</h4>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-sm-12 single-blog">
                    	<div class="blog_comments-list">
                            <h2 class="r_post_title comment-t">{{ App\Models\Comment::where('blog_id', $blog->id)->get()->count() }} Comments</h2>
                            <div class="comments">
                                @foreach(App\Models\Comment::where('blog_id', $blog->id)->get() as $comment)
                                <div class="media author-bio comment">
                                    <div class="media-left">
                                        <a href="#">
                                        	<img src="{{ asset('images/avatar.jpg') }}" alt="" class="img-responsive img-circle">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4><a href="#">{{ $comment->name }}</a></h4>
                                        {{-- <a href="#" class="reply">Reply</a> --}}
                                        <h6>
                                            {{-- {{Carbon\Carbon::parse($comment->created_at)->format('H:i A')}},  --}}
                                            {{Carbon\Carbon::parse($comment->created_at)->format('M j, Y')}}
                                        </h6>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 single-blog">
                    	<div class="comment_form_area">
                            <div class="row">
                                @if(Session::has('success'))
                                    <div class="col-xl-12">
                                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          <h5 class="alert-heading">
                                            Success! 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </h5>
                                        <p class="mb-0">
                                          {{ Session::get('success') }}
                                            {{ Session::forget('success') }}
                                        </p>
                                      </div>
                                    </div>
                                @endif
                                <form method="post" action="{{ url('blog_comment') }}" class="form_inner col-xl-12">
                                    @csrf
	                                <div class="row">
	                                 	<div class="form-group col-md-6">
	                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Name">
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
	                                    </div>
	                                    <div class="form-group col-md-12">
	                                        <textarea class="form-control" id="comment" name="comment" placeholder="Your comment" rows="1">{{ old('comment') }}</textarea>
	                                    </div>
                                        <input type="text" name="blog_id" value="{{ $blog->id }}" hidden="">
	                                    <div class="form-btn col-md-12">
	                                        <button type="submit" value="submit" class="btn submit_btn">POST COMMENT</button>
	                                    </div>
	                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front.include.sidelink')        
    </section>
@stop