@extends('layouts.front.app')
@section('meta')
    <title>Portfolio | Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
@endsection
@section('content')
	<section class="sec-relative full_pad nav-space pt-0">
        <div class="latest_work_area l-portfolio-bg">
            <div class="container">
                <div class="sec-title">
                    <h2>Last Works</h2>
                    <p>A picture is a secret about a secret, the more it tells you the less you know.</p>
                </div>
                <div class="row latest_work_inner" id="latest_work_inner">
                    @foreach(App\Models\Portfolio::latest()->limit(4)->get() as $value)
                    <div class="col-xl-4 col-lg-6 col-md-6 work_item">
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
                    {{-- <div class="col-md-6 work_item">
                        <div class="latest_work_item">
                            <img src="{{ asset('images/latest_work-2.jpg') }}" alt="lt-w">
                            <div class="l_work_hover">
                                <h6><span>Lifestyle</span></h6>
                                <h4>Taking pictures is savoring life intensely, every hun...</h4>
                            </div>
                        </div>
                    </div>
                     --}}
                </div>
                @if(App\Models\Portfolio::get()->count() > 4)
                <div class="see-btn">
                    <input type="number" name="count" id="count" value="4" hidden="">
                    <button class="btn load-btn" data-total="{{ App\Models\Portfolio::get()->count() }}">LOAD MORE</button>
                </div>
                @endif
            </div>
        </div>
        @include('front.include.sidelink')        
    </section>

    

    {{-- <section class="photo_news_full full_pad">
        <div class="photo-news-area">
            <div class="container">
                <div class="sec-title">
                    <h2>Wedding Photography</h2>
                    <p>To photograph: it is to put on the same line of sight the head, the eye and the heart.</p>
                </div>
                <div class="row">
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
                	</div>
                	<div class="col-md-12">
                		<div class="photo-news-gallery">
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
		                </div>
                	</div>
                </div>
            </div>
        </div>
    </section> --}}
@stop
@section('js')
    <script type="text/javascript">
        $('.load-btn').on('click', function(event) {
            num = $('#count').val();
            total = $(this).attr('data-total');
            $.ajax({
                url: '{{ route('load_portfolio') }}',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    rowCount: num,
                },
                success:function(data)
                {
                    $('#latest_work_inner').append(data['1']);
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