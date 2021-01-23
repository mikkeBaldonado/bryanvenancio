@extends('layouts.front.app')
@section('meta')
    <title>Blogs | Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
@endsection
@section('content')
	<section class="blog_news_area full_pad nav-space pt-0">
        <div class="blog_news_inner">
            <div class="container">
                <div class="sec-title">
                    <h2>My Blog News</h2>
                    <p>To photograph: it is to put on the same line of sight the head, the eye and the heart.</p>
                </div>
                <div class="blog_view_area">
                    @foreach(App\Models\Blog::latest()->limit(1)->get() as $value)
                    <img src="{{ asset('uploads/blogs/'.$value->image) }}" alt="">
                    <div class="view_box">
                        <ul class="blog_date">
                            <li>
                                <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                    {{ date('M j, Y', strtotime($value->blog_date)) }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                {{ $value->author }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('blog_detail/'.$value->id.'/'.str_replace(' ', '_', $value->title)) }}">
                                    {{ Str::limit($value->title, 50) }}
                                </a>
                            </li>
                        </ul>
                        {{-- <ul class="social_share">
                            <li><a href="#"><i class="fa fa-heart"></i><span>5</span> likes</a></li>
                            <li><a href="#"><i class="fa fa-comment-o"></i><span>1</span> comments</a></li>
                            <li><a href="#"><i class="fa fa-eye"></i><span>10</span> views</a></li>
                        </ul> --}}
                    </div>
                    @endforeach
                </div>
                {{-- <div class="see-btn">
                    <a href="#" class="btn load-btn">LOAD MORE</a>
                </div> --}}
            </div>
        </div>
        @include('front.include.sidelink')        
    </section>

    <section class="latest-news-area blog_minus">
        <div class="container">
            <div class="row lt-news-items" id="lt-news-items">
                @php $num = 1; @endphp
                @foreach(App\Models\Blog::latest()->skip(1)->limit(4)->get() as $value)
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
                            <img src="{{ asset('images/1.jpg') }}" alt="">
                        </div>
                        <div class="media-body mt-auto">
                            <h6 class="title-tag">Lifestyle</h6>
                            <a href="{{ url('blog_detail') }}">
                                <h3>The camera would miss it all. A magnificent picture is never worth...</h3>
                            </a>
                            <p>There is in fact something obscene and sinister about photography, a desire to imprison, to incorporate, a sexual intensity of pursuit...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 lt-item lt-item-pad">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('images/1.jpg') }}" alt="">
                        </div>
                        <div class="media-body mt-auto">
                            <h6 class="title-tag">Lifestyle</h6>
                            <a href="{{ url('blog_detail') }}">
                                <h3>The camera would miss it all. A magnificent picture is never worth...</h3>
                            </a>
                            <p>The camera would miss it all. A magnificent picture is never worth a thousand perfect words. Ansel Adams can be a great artist, but he</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lt-news-items">
                <div class="col-sm-6 lt-item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('images/1.jpg') }}" alt="">
                        </div>
                        <div class="media-body mt-auto">
                            <h6 class="title-tag">Lifestyle</h6>
                            <a href="{{ url('blog_detail') }}">
                                <h3>The camera would miss it all. A magnificent picture is never worth...</h3>
                            </a>
                            <p>There is in fact something obscene and sinister about photography, a desire to imprison, to incorporate, a sexual intensity of pursuit...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 lt-item lt-item-pad">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('images/1.jpg') }}" alt="">
                        </div>
                        <div class="media-body mt-auto">
                            <h6 class="title-tag">Lifestyle</h6>
                            <a href="{{ url('blog_detail') }}">
                                <h3>The camera would miss it all. A magnificent picture is never worth...</h3>
                            </a>
                            <p>The camera would miss it all. A magnificent picture is never worth a thousand perfect words. Ansel Adams can be a great artist, but he</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            @if(App\Models\Blog::get()->count() > 5)
            <div class="see-btn">
                <input type="number" name="count" id="count" value="5" hidden="">
                <button class="btn load-btn" data-total="{{ App\Models\Blog::get()->count() }}">LOAD MORE</button>
            </div>
            @endif
            {{-- <div class="row pagination_area">
                <div class="col-md-2 col-xs-3">
                    <a class="prev_btn" href="#">PREV PAGE</a>
                </div>
                <div class="col-md-8 col-xs-6">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">13</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-3">
                    <a class="next_btn" href="#">NEXT PAGE</a>
                </div>
            </div> --}}
        </div>
    </section>
@stop
@section('js')
    <script type="text/javascript">
        $('.load-btn').on('click', function(event) {
            num = $('#count').val();
            total = $(this).attr('data-total');
            $.ajax({
                url: '{{ route('load_blog') }}',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    rowCount: num,
                },
                success:function(data)
                {
                    $('#lt-news-items').append(data['1']);
                    $('#count').val(data['2']);
                    if(data['2'] >= total){
                        $('.see-btn').css('display', 'none');
                    }
                }
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
        });
    </script>
@stop