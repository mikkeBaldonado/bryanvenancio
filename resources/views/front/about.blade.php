@extends('layouts.front.app')
@section('meta')
    <title>Rate | Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
@endsection
@section('content')
	<section class="full-about-area row m0 full_pad nav-space pt-0">
		<div class="container-fluid full-about-bg">
			<div class="row">
	            <div class="about-me-left">
	                <div class="about-content">
	                    <div class="sec-title">
	                        <h2>About Brillian</h2>
	                        <p>Meet me and my little history</p>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-4 about-text">
	                            <p>Photographers tend not to photograph what they can’t see, which is the very reason one should try to attempt it. Otherwise we’re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that's just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>
	                            <p>He was right. John Loengard, the picture editor at Life, always used to tell me, ”If you want something to look interesting, don’t light all of it.Taking pictures is savoring life intensely, every hundredth of a second. For me, the camera is a sketch book, an instrument of the best intuitions.</p>
	                        </div>
	                        <div class="col-md-4 about-text">
	                            <p>Photography is a magical kind of art that allows people to preserve time and moments, and to describe the world the way they see it and loves.</p>
	                            <p>For me, the subject of the picture is always more important than the picture. A photograph is a click away. A good photographer is a hundred clicks away and a better one, a thousand clicks away for photography love photos and we make.</p>
	                            <p>I am a professional photographer by trade and an amateur photographer by vocation. If only I had thought of a Kodak! I could have flashed that glimpse of the Under-world in a second, and examined for more best and nice photographers.</p>
	                            <p>Women that can work a camera with ease often work men just as effortlessly for both require the same commitment to vanity and manipulations.</p>
	                        </div>
	                        <div class="col-md-4 about-text">
	                            <p>For the photograph's immobility is somehow the result of a perverse confusion between two concepts: the Real and the Live: by attesting that the object has been real, the photograph surreptitiously induces belief that it is alive for us.</p>
	                            <p>Both those taking snaps and documentary photographers, however, have not understood 'information.' What they produce are memories.</p>
	                            <p>When people look at my pictures I want them to feel the way they do when they want to read a line of a poem twice. Today everything exists to end in a photograph. When I look at my old pictures, all I can see is what I used to be but am no longer. I think What I can see is what I am not.</p>
	                            
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="about-me-right">
	                <div class="img">
	                    <img src="{{ asset('images/1.jpg') }}" alt="">
	                    <a href="{{ url('contact') }}" class="btn load-btn">Contact Me</a>
	                </div>
	            </div>
		        <!-- @include('front.include.sidelink') -->
	        </div>
		</div>
	</section>

    {{-- <section class="masonry-slide-area">
        <div class="container">
        	<div class="row blog-slidshow">
                <div class="col-sm-3 col-12 slidshow-item">
                    <img src="{{ asset('images/about-page/mas-g1.jpg') }}" alt="">
                </div>
                <div class="col-sm-6 col-12 slidshow-item">
                    <div class="bl-slider owl-carousel">
                        <div class="item">
                            <img src="{{ asset('images/blog-details/slideshow-5.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/blog-details/slideshow-2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/blog-details/slideshow-5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
	            <div class="col-sm-3 col-12">
		            <div class="row">
		            	<div class="col-sm-12 col-6 slidshow-item">
		                    <img src="{{ asset('images/about-page/mas-g3.jpg') }}" alt="">
		            	</div>
		            	<div class="col-sm-12 col-6 slidshow-item">
		                    <img src="{{ asset('images/about-page/mas-g4.jpg') }}" alt="">
		            	</div>
		            </div>	
                </div>
            </div>
        </div>
    </section> --}}
@stop