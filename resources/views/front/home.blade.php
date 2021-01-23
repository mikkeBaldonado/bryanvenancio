@extends('layouts.front.app')
@section('meta')
    <title>Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
@endsection
@section('content')
	<section class="main_slider nav-space pt-0">
        <div class="slider_bg_inner">
            <div class="slider_bg owl-carousel">
                @foreach(App\Models\Slider::latest()->get() as $slider)
                <div class="item">
                    <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="">
                </div>
                @endforeach
                {{-- <div class="item">
                    <img src="{{ asset('images/slider-2.jpg') }}" alt="">
                </div> --}}
                
            </div>
        </div>
        <div class="text_slider_area">
            <div class="container">
                <div class="text_slider_inner">
                    <div class="text_slider owl-carousel">
                        @foreach(App\Models\Slider::latest()->get() as $slider)
                        <div class="item">
                            <h2>
                                <span>{{ $slider->category->title }}</span>
                                {{ $slider->title }}
                            </h2>
                        </div>
                        @endforeach
                        {{-- <div class="item">
                            <h2><span>Fashion Photo</span>A picture is a secret about a secret.</h2>
                        </div> --}}
                        
                    </div>
                    <div class="home_screen_nav">
                        <i class="fa fa-angle-left testi_prev" aria-hidden="true"></i>
                        <i class="fa fa-angle-right testi_next" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('front.include.sidelink') --}}
    </section>

    {{-- <section class="about-area">
        <div class="about-inner row m0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 about-content">
                        <div class="about-title">
                            <h2>About Me</h2>
                            <p>You don't take a photograph, you make it.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 about-text">
                                <p>Photographers tend not to photograph what they can’t see, which is the very reason one should try to attempt it. Otherwise we’re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that's just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>
                                <p>He was right. John Loengard, the picture editor at Life, always used to tell me, ”If you want something to look interesting, don’t light all of it.Taking pictures is savoring life intensely, every hundredth of a second. For me, the camera is a sketch book, an instrument of the best intuitions.</p>
                            </div>
                            <div class="col-md-6 about-text">
                                <p>Photography is a magical kind of art that allows people to preserve time and moments, and to describe the world the way they see it and loves.</p>
                                <p>For me, the subject of the picture is always more important than the picture. A photograph is a click away. A good photographer is a hundred clicks away and a better one, a thousand clicks away for photography love photos and we make.</p>
                                <p>I am a professional photographer by trade and an amateur photographer by vocation. If only I had thought of a Kodak! I could have flashed that glimpse of the Under-world in a second, and examined for more best and nice photographers.</p>
                                <p>Women that can work a camera with ease often work men just as effortlessly for both require the same commitment to vanity and manipulations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-auto">
                        <div class="about-img">
                            <img src="{{ asset('images/about-img.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-about-sec full_pad">
            <div class="about-slider-left">
                <div class="about-slider owl-carousel" id="blog_home">
                    @foreach(App\Models\Blog::latest()->get() as $blog)
                    <div class="item">
                        <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="">
                    </div>
                    @endforeach
                    
                </div>
                <div class="slider_nav">
                    <i class="fa fa-angle-left testi_prev" aria-hidden="true"></i>
                    <i class="fa fa-angle-right testi_next" aria-hidden="true"></i>
                </div>
            </div>
            <div class="about-slider-right">
                <div class="text-slider about-text owl-carousel">
                    @foreach(App\Models\Blog::latest()->get() as $blog)
                    <div class="item">
                        {!! Str::limit($blog->description, 100) !!}
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section> --}}

    <section class="latest-news-area">
        <div class="container">
            <div class="sec-title">
                <h2>Last Photography News</h2>
                <p>To photograph: it is to put on the same line of sight the head, the eye and the heart.</p>
            </div>
            <div class="row lt-news-items">
                @php $num = 1; @endphp
                @foreach(App\Models\Blog::latest()->limit(4)->get() as $value)
                @if($num == 1)
                <div class="col-sm-6 lt-item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('uploads/blogs/'.$value->image) }}" class="img-fluid" id="blog_img" alt="">
                        </div>
                        <div class="media-body mt-auto">
                            <h6 class="title-tag">
                                {{-- @foreach(App\Models\BlogCategory::all() as $tag)
                                @if(in_array($tag->id, json_decode($value->tags)))
                                {{ $tag->title }},
                                @endif
                                @endforeach --}}
                            </h6>
                            <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}"">
                                <h3>{{ Str::limit($value->title, 50) }}</h3>
                            </a>
                            <div>
                                {!! Str::limit($value->description, 100) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @php $num = 2; @endphp
                @else
                <div class="col-sm-6 lt-item lt-item-pad">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('uploads/blogs/'.$value->image) }}" class="img-fluid" id="blog_img" alt="">
                        </div>
                        <div class="media-body mt-auto">
                            <h6 class="title-tag">
                                {{-- @foreach(App\Models\BlogCategory::all() as $tag)
                                @if(in_array($tag->id, json_decode($value->tags)))
                                {{ $tag->title }},
                                @endif
                                @endforeach --}}
                            </h6>
                            <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                <h3>{{ Str::limit($value->title, 50) }}</h3>
                            </a>
                            <div>
                                {!! Str::limit($value->description, 100) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @php $num = 1; @endphp
                @endif
                @endforeach
            </div>
            {{-- <div class="row lt-news-items">
                <div class="col-sm-6 lt-item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('images/3.jpg') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h6 class="title-tag">Lifestyle</h6>
                            <h3>The camera would miss it all. A magnificent picture is never worth...</h3>
                            <p>There is in fact something obscene and sinister about photography, a desire to imprison, to incorporate, a sexual intensity of pursuit...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 lt-item lt-item-pad">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('images/4.jpg') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h6 class="title-tag">Lifestyle</h6>
                            <h3>The camera would miss it all. A magnificent picture is never worth...</h3>
                            <p>The camera would miss it all. A magnificent picture is never worth a thousand perfect words. Ansel Adams can be a great artist, but he</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="see-btn">
                <a href="{{ url('blog') }}" class="btn load-btn">LOAD MORE</a>
            </div>
        </div>
    </section>

    <section class="photo_news_full full_pad">
        <div class="photo-news-area">
            <div class="container">
                <div class="sec-title">
                    <h2>Wedding Photography</h2>
                    <p>To photograph: it is to put on the same line of sight the head, the eye and the heart.</p>
                </div>
                <div class="row">
                @php $num = 1; @endphp
                @foreach(App\Models\Portfolio::latest()->where('category_id', 1)->limit(4)->get() as $value)
                	@if($num == 4)
                    <div class="col-md-12">
                        <div class="photo-news-gallery">
                            <div class="col-sm-12 photo-item">
                                <figure class="photo-effect">
                                    <img src="{{ asset('uploads/portfolio/'.$value->image) }}" alt="">
                                    <figcaption>
                                        <div class="texts">
                                            <h6><span>{{ $value->title }}</span></h6>
                                            <h4>{{ $value->caption }}</h4>
                                            <small >{{ $value->location }}</small>
                                            {{-- <a href="#">{{Treviso}}</a> --}}
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-4">
                		<div class="photo-news-gallery">
		                    <div class="col-sm-12 photo-item">
		                        <figure class="photo-effect">
		                            <img src="{{ asset('uploads/portfolio/'.$value->image) }}" alt="">
		                            <figcaption>
		                                <div class="texts">
		                                    <h6><span>{{ $value->title }}</span></h6>
		                                    <h4>{{ $value->caption }}</h4>
                                            <small >{{ $value->location }}</small>
		                                    {{-- <a href="#">{{ $value->location }}</a> --}}
		                                    {{-- <a href="#">Treviso</a> --}}
		                                </div>
		                            </figcaption>
		                        </figure>
		                    </div>
		                </div>
                	</div>
                    @endif
                @php $num++; @endphp
                @endforeach
                	{{-- <div class="col-md-4">
                		<div class="photo-news-gallery">
		                    <div class="col-sm-12 photo-item">
		                        <figure class="photo-effect">
		                            <img src="{{ asset('images/photography/1.png') }}" alt="">
		                            <figcaption>
		                                <div class="texts">
		                                    <h6><span>adriano & adriana</span></h6>
		                                    <h4>I tend to think of the act of photographing, generally...</h4>
		                                    <a href="#">Italy</a>
		                                    <a href="#">Treviso</a>
		                                </div>
		                            </figcaption>
		                        </figure>
		                    </div>
		                </div>
                	</div>
                	<div class="col-md-4">
                		<div class="photo-news-gallery">
		                    <div class="col-sm-12 photo-item">
		                        <figure class="photo-effect">
		                            <img src="{{ asset('images/photography/1.png') }}" alt="">
		                            <figcaption>
		                                <div class="texts">
		                                    <h6><span>adriano & adriana</span></h6>
		                                    <h4>I tend to think of the act of photographing, generally...</h4>
		                                    <a href="#">Italy</a>
		                                    <a href="#">Treviso</a>
		                                </div>
		                            </figcaption>
		                        </figure>
		                    </div>
		                </div>
                	</div> --}}
                	
                </div>
                {{-- <div class="photo-news-gallery">
                    <div class="col-sm-4 photo-item">
                        <figure class="photo-effect">
                            <img src="{{ asset('images/photography/1.png') }}" alt="">
                            <figcaption>
                                <div class="texts">
                                    <h6><span>adriano & adriana</span></h6>
                                    <h4>I tend to think of the act of photographing, generally...</h4>
                                    <a href="#">Italy</a>
                                    <a href="#">Treviso</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 photo-item">
                        <figure class="photo-effect">
                            <img src="{{ asset('images/photography/2.jpg') }}" alt="">
                            <figcaption>
                                <div class="texts">
                                    <h6><span>adriano & adriana</span></h6>
                                    <h4>I tend to think of the act of photographing, generally...</h4>
                                    <a href="#">Italy</a>
                                    <a href="#">Treviso</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 photo-item">
                        <figure class="photo-effect">
                            <img src="{{ asset('images/photography/3.jpg') }}" alt="">
                            <figcaption>
                                <div class="texts">
                                    <h6><span>adriano & adriana</span></h6>
                                    <h4>I tend to think of the act of photographing, generally...</h4>
                                    <a href="#">Italy</a>
                                    <a href="#">Treviso</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-12 photo-item">
                        <figure class="photo-effect">
                            <img src="{{ asset('images/photography/4.jpg') }}" alt="">
                            <figcaption>
                                <div class="texts">
                                    <h6><span>adriano & adriana</span></h6>
                                    <h4>I tend to think of the act of photographing, generally...</h4>
                                    <a href="#">Italy</a>
                                    <a href="#">Treviso</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="latest_work_area m-b">
        <div class="container">
            <div class="sec-title">
                <h2>Meet My Last Works</h2>
                <p>A picture is a secret about a secret, the more it tells you the less you know.</p>
            </div>
            <div class="row latest_work_inner">
                @foreach(App\Models\Portfolio::latest()->limit(4)->get() as $value)
                <div class="col-md-6 work_item">
                    <div class="latest_work_item">
                        <img src="{{ asset('uploads/portfolio/'.$value->image) }}" alt="lt-w">
                        <div class="l_work_hover">
                            <h6>
                                <span>
                                    {{ $value->category->title }}
                                {{-- @foreach(App\Models\BlogCategory::all() as $tag)
                                @if(in_array($tag->id, json_decode($value->tags)))
                                {{ $tag->title }},
                                @endif
                                @endforeach --}}
                                </span>
                            </h6>
                            <h4>{{ $value->title }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop